<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Check-in</title>
  <link rel="stylesheet" href="style.css"/>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />
</head>
<body>
  <!-- Check-in Navbar -->
  <div class="navbar">
    <nav class="navbar-container">
      <a href="f_checkin_inhouse.php">
        <img src="./logo/Assumption_University(logo).png" alt="logo"/>
      </a>
      <ul class="navbar-left">
        <li>
          <a href="f_checkin_inhouse.php">
            <h1>online hotel management system</h1>
          </a>
        </li>
      </ul>

      <ul class="navbar-right">
        <li>
          <a style="color:#d73938;" href="f_checkin_inhouse.php">customer check-in</a>
        </li>
        <li>
          <a href="f_checkout_waiting.php">customer check-out</a>
        </li>
      </ul>
    </nav>
  </div>

  <!-- Check-in -->
  <div class="list-container">
    <?php
    // Include database connection file
    require_once "DB_connect.php";

    // Retrieve reservation_no sent via POST
    $reservation_no = $_POST['reservation_no'];

    // Fetch the selected reservation information
    $query = "SELECT reservation_no, email, firstname, lastname, agent, total_room, arrive_date, depart_date
                FROM reservation JOIN customer USING(email) JOIN account USING(email)
                WHERE reservation_no = $reservation_no;";
    $result = mysqli_query($conn, $query);

    // Fetch the row
    $row = mysqli_fetch_assoc($result);

    // Output reservation information
    echo "<br><br>";
    echo "Reservation No.:  " . sprintf("%06d", $row['reservation_no']) . "<br><br>";
    echo "Email:            " . $row['email'] . "<br><br>";
    echo "Customer Name:    " . $row['firstname'] . " " . $row['lastname'] . "<br><br>";
    echo "Agent:            " . $row['agent'] . "<br><br>";
    echo "Arrive:           " . $row['arrive_date'] . "<br><br>";
    echo "Depart:           " . $row['depart_date'] . "<br><br>";
    echo "Total Room:       " . $row['total_room'] . "<br><br>";

    // Fecth room numbers associated with the selected reservation
    $query = "SELECT room_no
                FROM reservation JOIN reserved_room USING(reservation_no)
                WHERE reservation_no = $reservation_no
                ORDER BY room_no ASC;";
    $result = mysqli_query($conn, $query);

    // Loop through and display the room numbers
    echo "Room Number: ";
    $first = true;
    while ($row = mysqli_fetch_assoc($result)) {
        if (!$first) {
            echo ", ";
        }
        echo $row['room_no'];
        $first = false;
    }

    // Fetch paid amount associated with the selected reservation
    $query = "SELECT amount FROM paid WHERE reservation_no = $reservation_no;";
    $result = mysqli_query($conn, $query);
    $paidamount = mysqli_fetch_assoc($result)['amount'];

    // Close database connection
    mysqli_close($conn);
    ?>
    <!-- Display form for updating paid amount -->
    <br><br>
    <form action="f_action_update.php" method="post">
        <label for="paidamount"> Paid Amount: </label>
        <input type="text" name="paidamount" placeholder="<?php echo $paidamount; ?>" style="width: 65px;">
        <input type='hidden' name='reservation_no' value='<?php echo $reservation_no; ?>'>
        <button class="reservation-button-red">Update</button>
    </form>
    <a href="f_checkin_inhouse.php" class="reservation-button-black">Cancel</a>
  </div>

</body>
</html>
