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
    <div class="list-title">
      <h2>CUSTOMER CHECK-IN</h2>
    </div>

    <!-- Check-in Head - Radio (WAITING LIST | IN-HOUSE) -->
    <div class="list-header">
      <div class="radio-days">
        <input class="radio__input" type="radio" value="checkinwaiting" id="checkinwaiting" name="checkin_radio">
        <a href="f_checkin_waiting.php" class="radio__label" for="checkinwaiting">WAITING LIST</a>
        <input class="radio__input" type="radio" value="checkininhouse" id="checkininhouse" name="checkin_radio" checked>
        <a href="f_checkin_inhouse.php" class="radio__label" for="checkininhouse">IN-HOUSE</a>
      </div>
    </div>
    
    <!-- Check-in Body -->
    <div class="list-body">
      <table class="list-table">
        <!-- Table headers -->
        <thead class="list-thead">
          <tr class="list-tr">
            <th class="list-th" style="text-align: left;"> Reservation No. </th>
            <th class="list-th" style="text-align: left;"> Email </th>
            <th class="list-th" style="text-align: left;"> Customer Name </th>
            <th class="list-th" style="text-align: center;"> Agent </th>
            <th class="list-th" style="text-align: center;"> Arrive </th>
            <th class="list-th" style="text-align: center;"> Depart </th>
          </tr>
        </thead>
        <tbody class="list-tbody">
          <?php
          // Include database connection file
          require_once "DB_connect.php";

          // Fetch reservations from the database
          $query = "SELECT reservation_no, email, firstname, lastname, agent, total_room, arrive_date, depart_date
                    FROM reservation JOIN customer USING(email) JOIN account USING(email)
                    WHERE reservation_no IN (SELECT reservation_no FROM in_house)
                    ORDER BY arrive_date ASC;";
          $result = mysqli_query($conn, $query);

          // Loop through the results and display each reservation
          while ($row = mysqli_fetch_assoc($result)) {
            $formatted_reservation_no = sprintf("%06d", $row['reservation_no']);
            echo "<tr class='list-tr'>";
            echo "<td class='list-td' style='text-align: left;'>" . $formatted_reservation_no . "</td>";
            echo "<td class='list-td' style='text-align: left;'>" . $row['email'] . "</td>";
            echo "<td class='list-td' style='text-align: left;'>" . $row['firstname'] . " " . $row['lastname'] . "</td>";
            echo "<td class='list-td' style='text-align: center;'>" . $row['agent'] . "</td>";
            echo "<td class='list-td' style='text-align: center;'>" . $row['arrive_date'] . "</td>";
            echo "<td class='list-td' style='text-align: center;'>" . $row['depart_date'] . "</td>";
            echo "<td class='list-td' style='text-align: center;'>";
            // Form to submit the selected reservation's reservation_no
            echo "<form action='f_checkin_inhouse_select.php' method='post'>";
            echo "<input type='hidden' name='reservation_no' value='" . $row['reservation_no'] . "'>";
            echo "<button type='submit' class='reservation-button-red'>Select</button>";
            echo "</form>";
            echo "</td>";
            echo "</tr>";
          }

          // Close database connection
          mysqli_close($conn);
          ?>
        </tbody>
      </table>
    </div>

  </div>

</body>
</html>
