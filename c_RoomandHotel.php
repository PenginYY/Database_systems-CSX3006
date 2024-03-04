<?php
session_start();

require './DB_connect.php';

  //Query reservation data and account data
  //Show reservation number, total room, customer name
  $email = $_SESSION['email'];
  $sql_customer_data = "SELECT * FROM `reservation` AS r, `account` AS a WHERE r.email=a.email AND a.email = ?";
  $stmt_customer_data = $conn->prepare($sql_customer_data);
  $stmt_customer_data->bind_param("s", $email);
  $stmt_customer_data->execute();
  $result_customer_data = $stmt_customer_data->get_result();
  $row_customer_data = mysqli_fetch_array($result_customer_data);


  //Query reservation data
  //Show room number
  $rev_no = $row_customer_data['reservation_no'];
  $sql_reserved_room = "SELECT * FROM `reserved_room` WHERE reservation_no = ?";
  $stmt_reserved_room = $conn->prepare($sql_reserved_room);
  $stmt_reserved_room->bind_param("i", $rev_no); 
  $stmt_reserved_room->execute();
  $result_reserved_room = $stmt_reserved_room->get_result();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room & Hotel Info </title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
</head>
<body>

<!-- Room & Hotel navbar-->
<div class="navbar">
      <nav class="navbar-container">
        <a href="./c_personal_info.php"
          ><img src="./logo/Assumption_University(logo).png" alt="logo"
        /></a>
        <ul class="navbar-left">
          <li>
            <a href="./c_personal_info.php"
              ><h1>online hotel management system</h1>
            </a>
          </li>
        </ul>

        <ul class="navbar-right">
          <li>
            <a href="./c_personal_info.php">personal information</a>
          </li>
          <li>
            <a href="./c_RoomandHotel.php" style="color: #d73938;">room & hotel info</a>
          </li>
          <li>
            <a href="./c_db_logout.php">Logout</a>
          </li>
        </ul>
      </nav>
    </div>

    <h1 class="title_customer">Room & Hotel information</h1>

    <!-- Room information-->
    <div class="room-hotel-info">
      <div class="info">
        <h3 class="head">Room Information</h3>
        <table class="room-info">
          <tr>
            <th class="head">reservation number</th>
            <th class="head">Total room</th>
          </tr>

          <tr>
            <td class="sub-head">
              <?php 
              $formatted_rev_no = sprintf("%06d", $rev_no);
              echo $formatted_rev_no;?>
            </td>
            <td class="sub-head">
              <?php $rev_no = $row_customer_data['total_room'];
              $formatted_rev_no = sprintf("%04d", $rev_no);
              echo $formatted_rev_no;?>
            </td>
          </tr>

          <tr>
            <th class="head">customer name</th>
            <th class="head">check-in date</th>
          </tr>

          <tr>
            <td class="sub-head">
              <?php echo $row_customer_data['firstname'], " ", $row_customer_data['lastname'];?>
            </td>
            <td class="sub-head">
              <?php echo $row_customer_data['arrive_date'];?>
            </td>
          </tr>

          <tr>
            <th class="head">room number</th>
            <th class="head">check-out date</th>
          </tr>

          <tr>
            <td class="sub-head">
              <?php
              $all_rooms = array();
              $rowcount = mysqli_num_rows($result_reserved_room);
              while($rowcount > 0 && $row_room = mysqli_fetch_array($result_reserved_room)) {
                $all_rooms[] = $row_room['room_no'];
                $rowcount-=1;
              }
              echo  implode(", ", $all_rooms);?>
            </td>
            <td class="sub-head">
              <?php echo $row_customer_data['depart_date'];?>
            </td>
          </tr>

          <tr>
            <th class="head">payment</th>
          </tr>

          <tr>
            <td class="sub-head">
              <div class="money-icon">
                <i class="fa-solid fa-wallet" style="margin-right: 20px; margin-top: 10px;">
                </i>cash
                </div>
              </td>
          </tr>
        </table>
      </div>

      <!-- Hotel information -->
      <div class="info">
      <h3 class="head">Hotel Information</h3>
          <table class="room-info">
            <tr>
              <th class="head">email</th>
            </tr>

            <tr>
              <td class="sub-head">Bangkok.hotel@gmail.com</td>
            </tr>

            <tr>
              <th class="head">telephone</th>
            </tr>

            <tr>
              <td class="sub-head">02-333-1010</td>
            </tr>

            <tr>
              <th class="head">address</th>
            </tr>

            <tr>
              <td class="sub-head">99/9 Phra Khanong, Bangkok, Thailand 10260</td>
            </tr>

            <tr>
              <th class="head">website</th>
            </tr>

            <tr>
              <td class="sub-head"><a href="#" style="color:black;">WWW.INFO@HOTEL.CO</a></td>
            </tr>
          </table>
      </div>
    </div>
</body>
</html>