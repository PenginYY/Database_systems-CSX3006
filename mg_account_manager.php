<?php
session_start(); 
require './DB_connect.php';

//Query account table
$sql_accounts = "SELECT a.*, e.role 
                 FROM account a
                 LEFT JOIN employee e ON a.email = e.email";
$result_accounts = $conn->query($sql_accounts);

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
  <title>Account Manager Page</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

<!-- NavBar -->
<div class="navbar">
  <nav class="navbar-container">
    <a href="account_manager.php"><img src="./logo/Assumption_University(logo).png" alt="logo" /></a>
    <ul class="navbar-left">
      <li><a href="mg_account_manager.php"><h1>online hotel management system</h1></a></li>
    </ul>
    <!-- To select other features -->
    <ul class="navbar-right">
      <li><a href="./mg_account_manager.php" style="color: #d73938;">account manager</a></li>
      <li><a href="./mg_customer_list.php">customer list</a></li>
    </ul>
  </nav>
</div>

<div class="reservation">
  <div class="reservation-header">
    <div class="reservation-title">
      <h2>ACCOUNT MANAGER</h2>
    </div>
    <div style="display: flex; margin-top: 30px;">
      <div class="hotel-info-manager" style="margin-right: 20px;">
        <!-- link to edit page -->
        <a href="./mg_hotel_info.php" class="mg-button-red">Hotel Info</a>
      </div>
      <div class="add-new-account-manager">
        <!-- link to edit page -->
        <a href="./mg_add_new_account_manager.php" class="reservation-button-red">Add</a>
      </div>
    </div>
  </div>

  <!-- Body -->
  <div class="reservation-body">
    <table class="res-table">
      <thead class="thead">
        <tr class="res-tr">
          <th class="res-th" style="text-align: left;"> Name </th>
          <th class="res-th" style="text-align: left;"> Email </th>
          <th class="res-th" style="text-align: left;"> Role </th>
          <th class="res-td" style="text-align: center;"> Edit </th>
        </tr>
      </thead>
      <tbody class="res-tbody">
        <?php
        while ($row = $result_accounts->fetch_assoc()) {
          echo "<tr class='res-tr'>";
          echo "<td class='res-td' style='text-align: left;'><a href='#popup-info' style='text-decoration: none; color: black;'>{$row['firstname']} {$row['lastname']}</a></td>";
          echo "<td class='res-td' style='text-align: left;'>{$row['email']}</td>";
          echo "<td class='res-td' style='text-align: left;'>{$row['role']}</td>";
          echo "<td class='res-td' style='text-align: center;'> 
                <a href='./mg_edit_account_manager.php' class='reservation-button-edit'>
                  <i class='fa-regular fa-pen-to-square'></i>
                </a>
              </td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</div>
</body>
</html>

