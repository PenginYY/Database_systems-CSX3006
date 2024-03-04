<?php
session_start();
require './DB_connect.php';

// Check if search
if(isset($_GET['search']) && !empty($_GET['search'])) {
    $search = mysqli_real_escape_string($conn, $_GET['search']);
    
    // Query with search
    $sql_customers = "SELECT r.*, a.firstname, a.lastname
                      FROM reservation r
                      LEFT JOIN account a ON r.email = a.email
                      WHERE a.firstname LIKE '%$search%' OR a.lastname LIKE '%$search%'";
} else {
    // Query without search
    $sql_customers = "SELECT r.*, a.firstname, a.lastname
                      FROM reservation r
                      LEFT JOIN account a ON r.email = a.email";
}

$result_accounts = $conn->query($sql_customers);
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
    <title>Customer List Page</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    
    <!-- Customer List -->
    <div class="navbar">
      <nav class="navbar-container">
        <a href="mg_customer_list.php"
          ><img src="./logo/Assumption_University(logo).png" alt="logo"
        /></a>
        <ul class="navbar-left">
          <li>
            <a href="mg_customer_list.php"
              ><h1>online hotel management system</h1></a
            >
          </li>
        </ul>

        <ul class="navbar-right">
          <li>
            <a href="./mg_account_manager.php">account manager</a>
          </li>
          <li>
            <a href="./mg_customer_list.php" style="color: #d73938;">customer list</a>
          </li>
        </ul>
      </nav>
    </div>

    <!-- Account Info -->
    <div class="list-container">
      <div class="list-title">
        <h2>CUSTOMER LIST</h2>
      </div>
      
      <!-- Customer Head -->
      <div class="list-header">
        <div class="radio-days">
          <input class="radio__input" type="radio" value="day1" name="days" id="day1">
          <label class="radio__label" for="day1"> YESTERDAY </label>
          <input class="radio__input" type="radio" value="day2" name="days" id="day2" checked>
          <label class="radio__label" for="day2"> TODAY </label>
          <input class="radio__input" type="radio" value="day3" name="days" id="day3">
          <label class="radio__label" for="day3"> TOMORROW </label>
        </div>
          <!-- Search Form -->
        <form class="search" action="mg_customer_list.php" method="GET">
          <div class="search-container">
          <input class="search-input" type="search" placeholder="Search" name="search">
          <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
          </div>
        </form>
      </div>

      <!-- Customer Body -->
      <div class="list-body">
        <table class="list-table">
          <thead class="list-thead">
            <tr class="list-tr">
              <th class="list-th" style="text-align: left;">Reservation No.</th>
              <th class="list-th" style="text-align: left;">Customer Name</th>
              <th class="list-th" style="text-align: center;">Agent</th>
              <th class="list-th" style="text-align: center;">Arrive</th>
              <th class="list-th" style="text-align: center;">Depart</th>
            </tr>
          </thead>
          <tbody class="list-tbody">
            <?php
            while ($row = $result_accounts->fetch_assoc()) {
              echo "<tr class='list-tr'>";
              echo "<td class='list-td' style='text-align: left;'>{$row['reservation_no']}</td>";
              echo "<td class='list-td' style='text-align: left;'>{$row['firstname']} {$row['lastname']}</td>";
              echo "<td class='list-td' style='text-align: center;'>{$row['agent']}</td>";
              echo "<td class='list-td' style='text-align: center;'>{$row['arrive_date']}</td>";
              echo "<td class='list-td' style='text-align: center;'>{$row['depart_date']}</td>";
              echo "</tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>

    </div>
  </body>
</html>