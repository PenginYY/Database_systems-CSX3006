<?php
session_start();

require_once './DB_connect.php';
//Query reservation data & customer data
$sql_customer_data = "SELECT * FROM `account` AS a, `reservation` AS r
WHERE a.email=r.email";
$stmt_customer_data = $conn->prepare($sql_customer_data);
$stmt_customer_data->execute();
$result_customer_data = $stmt_customer_data->get_result();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>Reservation Page</title>
    <link rel="stylesheet" href="style.css" />

  </head>
  <body>

    <!-- Reservation Navbar -->
    <div class="navbar">
      <nav class="navbar-container">
        <a href="#" class="logo">
          <img src="./logo/Assumption_University(logo).png" alt="logo"/>
        </a>
        <ul class="navbar-left">
          <li>
            <a href="#"><h1>online hotel management system</h1></a>
          </li>
        </ul>

        <ul class="navbar-right">
          <li>
            <a href="#" style="color: #d73938;">reservation list</a>
          </li>
        </ul>
      </nav>
    </div>

    <!-- Rservation -->
    <div class="list-container">
      <div class="list-title">
        <h2>RESERVATIONS</h2>
      </div>
      <div class="list-header">
      <div class="radio-days">
        <input class="radio__input" type="radio" value="day1" id="day1" name="days" checked>
        <label class="radio__label" for="day1"><span id="currentDate"></span></label>

        <input class="radio__input" type="radio" value="day2" id="day2" name="days">
        <label class="radio__label" for="day2"><span id="nextDate"></span></label>

        <input class="radio__input" type="radio" value="day3" id="day3" name="days">
        <label class="radio__label" for="day3"><span id="nextNextDate"></span></label>
      </div>

      <a href="#popup-add" class="reservation-button-red">Add</a>
    </div>

    <script>
      const today = new Date();
      const currentDateElement = document.getElementById('currentDate');
      const nextDateElement = document.getElementById('nextDate');
      const nextNextDateElement = document.getElementById('nextNextDate');

      // Format the date like "Month Day, Year" (e.g., March 4, 2024)
      const formatDate = (date) => {
        const options = { year: 'numeric', month: 'long', day: 'numeric' };
        return date.toLocaleDateString('en-US', options);
      }

      currentDateElement.textContent = formatDate(today);

      // Add one day to get the next date
      const tomorrow = new Date(today.getTime() + (24 * 60 * 60 * 1000));
      nextDateElement.textContent = formatDate(tomorrow);

      // Add two days to get the day after tomorrow
      const dayAfterTomorrow = new Date(tomorrow.getTime() + (24 * 60 * 60 * 1000));
      nextNextDateElement.textContent = formatDate(dayAfterTomorrow);
    </script>


      <!-- Reservation Head -->
      <!-- <div class="list-header">
        <div class="radio-days">
          <input class="radio__input" type="radio" value="day1" id="day1" name="days" checked>
          <label class="radio__label" for="day1"><span id="currentDate"></span></label>
          <input class="radio__input" type="radio" value="day2" id="day2" name="days">
          <label class="radio__label" for="day2"><span id="nextDate"></span></label>
          <input class="radio__input" type="radio" value="day3" id="day3" name="days">
          <label class="radio__label" for="day3"><span id="nextNextDate"></span></label>
        </div>
         -->


      <!-- Reservation Body -->
      <div class="list-body">
        <table class="list-table">
          <thead class="list-thead">
            <tr class="list-tr">
              <th class="list-th" style="text-align: left;"> Reservation No. </th>
              <th class="list-th" style="text-align: left;"> Customer Name </th>
              <th class="list-th" style="text-align: center;"> Agent </th>
              <th class="list-th" style="text-align: center;"> Arrive </th>
              <th class="list-th" style="text-align: center;"> Depart </th>
              <th class="list-th" style="text-align: center;"> Edit </th>
            </tr>
          </thead>
          <tbody class="list-tbody">
            <?php
            $rowcount = mysqli_num_rows($result_customer_data);
              while($rowcount > 0 && $row_customer_data = mysqli_fetch_array($result_customer_data)){
            ?>
              <td class="list-td" style="text-align: left;"><?php echo $row_customer_data['reservation_no'];?></td>

              <td class="list-td" style="text-align: left;">
                <a href="r_reservation.php? reservation_id=<?php echo $row_customer_data["email"];?>#popup-info"><?php echo $row_customer_data['firstname'], " ", $row_customer_data['lastname'];?></a>
              </td>
              <td class="list-td" style="text-align: center;"><?php echo $row_customer_data['agent'];?></td>
              <td class="list-td" style="text-align: center;"><?php echo date('d/m/y', strtotime($row_customer_data['arrive_date']));?></td>
              <td class="list-td" style="text-align: center;"><?php echo date('d/m/y', strtotime($row_customer_data['depart_date']));?></td>

              <td class="list-td" style="text-align: center;"> 
                <a class="reservation-button-edit" href="r_reservation.php?email=<?php echo $row_customer_data["email"];?>#popup-edit">
                    <i class="fa-regular fa-pen-to-square"></i>
                </a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>


    <!-- Reservation Add -->
    <div class="overlay" id="popup-add">
      <div class="popup-box">
        <div class="container">
          <div class="title"><h3>Add Reservation</h3></div>
          <form action="r_add_db.php" method="post">
            <div class="list-details">
              <div class="column3">
                <div class="input-box">
                <label for="rev_no">Reservation No.</label>
                <input type="text" id="rev_no" name="rev_no" placeholder="Enter reservation number">
                </div>

                <div class="input-box">
                <label for="email">Customer Email</label>
                <input type="text" id="email" name="email" placeholder="Enter customer email" required>
                </div>

              </div>
              <div class="column2">
                <div class="input-box">
                  <label for="total-guest-a">Total Room(s)</label>
                  <input type="text" id="total-room-a" name="total_room" placeholder="Enter total room(s)" required>
                </div>
                <div class="input-box">
                  <label for="room-n-a">Room No.</label>
                  <div class="column3">
                    <input type="text" id="room-n-a" name="room_no" placeholder="---" required>
                  </div>
                </div>
              </div>
              <div class="column2">
                <div class="input-box">
                  <label for="agent-a">Agent</label>
                  <input type="text" id="agent-a" name="agent" placeholder="Enter agent" required>
                </div>
                <div class="input-box">
                  <label for="arr-date-a">Arriving Date</label>
                  <input type="date" id="arr-date-a" name="arrive_date" placeholder="00/00/00" required>
                </div>
                <div class="input-box">
                  <label for="dep-date-a">Departure Date</label>
                  <input type="date" id="dep-date-a" name="depart_date" placeholder="00/00/00" required>
                </div>
              </div>

            </div>
            <div class="popup-add-button">
              <input type="submit" value="Add" class="reservation-button-red">
              <a href="#" class="reservation-button-black">Cancel</a>
            </div>
          </form>
        </div>
      </div>
    </div>

    
    <?php
     $email = isset($_GET["email"]) ? $_GET["email"] : null;
     if ($email) {
      $stmt = $conn->prepare("SELECT * FROM `reservation` AS r, `account` AS a WHERE a.email = ? AND r.email=a.email");
      $stmt->bind_param("i", $email);
      $stmt->execute();
      $result = $stmt->get_result();
  
      if ($result->num_rows > 0) {
          $editResult = $result->fetch_assoc();
      } else {
          echo "Reservation ID not found: " . $_GET["email"];
      }
  
      $stmt->close();
     }
    ?>
    <!-- Rservation Edit -->
    <div class="overlay" id="popup-edit">
      <div class="popup-box">
        <div class="container">
          <div class="title"><h3>Edit Reservation</h3></div>
          <form action="r_edit_db.php?reservation_id=<?php echo isset($editResult['reservation_no']) ? $editResult['reservation_no'] : ''; ?>" name="reservation_no" method="post">
            <div class="list-details">
              <div class="column1">
                <div class="input-box">
                  <label for="res-number-e">Reservation No.</label>
                  <dd class="list-dd"><?php echo $editResult['reservation_no'];?></dd>
                </div>
                <div class="list-info-box">
                  <dt class="list-dt">Email</dt>
                  <dd class="list-dd"><?php echo $editResult['email']; ?></dd>
                </div>
              </div>
              
              <div class="input-box">
                <label for="cus-name-e">Customer Name</label>
                <input type="text" id="cus-name-e" name="customer_name" value="<?php echo $editResult['firstname'],$editResult['lastname']; ?>">
              </div>

              <div class="column2">
                <div class="input-box">
                  <label for="total-room-e">Total Room(s)</label>
                  <input type="text" id="total-room-e" name="total_room" value="<?php echo $editResult['total_room']; ?>">
                </div>
                <div class="input-box">
                  <label for="room-n-a">Room No.</label>
                  <div class="column3">
                    <input type="text" id="room-n-a" name="room_no" value="<?php echo $editResult['room_no']; ?>">
                  </div>
                </div>
              </div>
              <div class="column2">
                <div class="input-box">
                  <label for="agent-e">Agent</label>
                  <input type="text" id="agent-e" name="agent" value="<?php echo $editResult['agent']; ?>">
                </div>
                <div class="input-box">
                  <label for="arr-date-e">Arriving Date</label>
                  <input type="date" id="arr-date-e" name="arrive_date" value="<?php echo $editResult['arrive_date']; ?>">
                </div>
                <div class="input-box">
                  <label for="dep-date-e">Departure Date</label>
                  <input type="date" id="dep-date-e" name="depart_date" value="<?php echo $editResult['depart_date']; ?>">
                </div>
              </div>

            </div>
            <div class="popup-edit-button">
              <a href="r_delete.php?reservation_id=<?php echo isset($editResult['email']) ? $editResult['email'] : ''; ?>" class="reservation-button-black">Delete</a>
              <input type="submit" value="Edit" class="reservation-button-red">
              <a href="r_reservation.php" class="reservation-button-black">Cancel</a>
            </div>
          </form>
        </div>
      </div>
    </div>


    <?php
     require_once('./r_db.php');
     $reservation_id = isset($_GET["reservation_id"]) ? $_GET["reservation_id"] : null;
     if ($reservation_id) {
      $stmt = $conn->prepare("SELECT * FROM reservation WHERE reservation_id = ?");
      $stmt->bind_param("i", $reservation_id);
      $stmt->execute();
      $result = $stmt->get_result();
  
      if ($result->num_rows > 0) {
          $readResult = $result->fetch_assoc();
      } else {
          echo "Reservation ID not found: " . $_GET["reservation_id"];
      }
  
      $stmt->close();
     }
    ?>
    <div class="overlay" id="popup-info">
      <div class="popup-box">
        <div class="container">
          <div class="title"><h3>Reservation Info</h3></div>
            <div class="list-details">
              <div class="column1">
                <div class="list-info-box">
                  <dt class="list-dt">Reservation No.</dt>
                  <dd class="list-dd"><?php echo $readResult['reservation_id'];?></dd>
                </div>
                <div class="list-info-box">
                  <dt class="list-dt">Email</dt>
                  <dd class="list-dd"><?php echo $readResult['email']; ?></dd>
                </div>
              </div>
              
              <div class="list-info-box">
                <dt class="list-dt">Customer Name</dt>
                <dd class="list-dd"><?php echo $readResult['customer_name']; ?></dd>
              </div>

              <div class="column2">
                <div class="list-info-box">
                  <dt class="list-dt">Total Room(s)</dt>
                  <dd class="list-dd"><?php echo $readResult['total_room']; ?></dd>
                </div>
                <div class="list-info-box">
                  <dt class="list-dt">Room No.</dt>
                  <div class="column3">
                    <dd class="list-dd"><?php echo $readResult['sta_room_no']; ?></dd>
                    <b>-</b>
                    <dd class="list-dd"><?php echo $readResult['end_room_no']; ?></dd>
                  </div>
                </div>
              </div>
              <div class="column2">
                <div class="list-info-box">
                  <dt class="list-dt">Agent</dt>
                  <dd class="list-dd"><?php echo $readResult['agent']; ?></dd>
                </div>
                <div class="list-info-box">
                  <dt class="list-dt">Arriving Date</dt>
                  <dd class="list-dd"><?php echo $readResult['arrive_date']; ?></dd>
                </div>
                <div class="list-info-box">
                  <dt class="list-dt">Departure Date</dt>
                  <dd class="list-dd"><?php echo $readResult['depart_date']; ?></dd>
                </div>
              </div>

            </div>
            <div class="popup-info-button">
              <a href="r_reservation.php" class="reservation-button-red">Done</a>
            </div>
        </div>
      </div>
    </div>


  </body>
</html>