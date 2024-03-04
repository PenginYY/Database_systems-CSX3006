<?php
require './DB_connect.php';

//Query account and employee table
$sql_accounts = "SELECT *
                 FROM `account` AS a, `employee` AS e WHERE a.email= e.email ORDER BY a.firstname ASC";
    $stmt_accounts = $conn->prepare($sql_accounts);
    $stmt_accounts->execute();
    $result_accounts = $stmt_accounts->get_result();
    $rowcount = mysqli_num_rows($result_accounts);
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
  <div class="list-header">
  <h2>ACCOUNT MANAGER</h2>
    <div class="reservation-title">
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
    <table class="list-table">
      <thead class="list-thead">
        <tr class="list-tr">
          <th class="list-th" style="text-align: left;"> Name </th>
          <th class="list-th" style="text-align: left;"> Email </th>
          <th class="list-th" style="text-align: left;"> Role </th>
          <th class="list-td" style="text-align: center;"> Edit </th>
        </tr>
      </thead>
      <tbody class="list-tbody">
        <?php
        while ($rowcount > 0 && $row = mysqli_fetch_array($result_accounts)) {
          echo "<tr class='list-tr'>";
          echo "<td class='list-td' style='text-align: left;'>
                <a style='text-decoration: none; color: black;' href='mg_account_manager.php?email={$row["email"]}#popup-info'>
                  {$row['firstname']} {$row['lastname']}
                </a>
                </td>";
          echo "<td class='list-td' style='text-align: left;'>{$row['email']}</td>";
          echo "<td class='list-td' style='text-align: left;'>{$row['role']}</td>";
          echo "<td class='list-td' style='text-align: center;'> 
                <a class='reservation-button-edit' href='./mg_edit_account_manager.php?email={$row["email"]}'>
                  <i class='fa-regular fa-pen-to-square'></i>
                </a>
              </td>";
          echo "</tr>";
          $rowcount-=1;
        }
        ?>
      </tbody>
    </table>
  </div>
</div>

    <?php
    require_once('./DB_connect.php');
    $email = isset($_GET["email"]) ? $_GET["email"] : null;
    if ($email) {
      $stmt = $conn->prepare("SELECT * FROM `account` AS a, `employee` AS e WHERE a.email= e.email AND a.email= ? ORDER BY a.firstname ASC");
      $stmt->bind_param("i", $email);
      $stmt->execute();
      $result = $stmt->get_result();
  
      if ($result->num_rows > 0) {
          $readResult = $result->fetch_assoc();
      } else {
          echo "Email not found: " . $_GET["email"];
      }
  
      $stmt->close();
    }
    ?>
    <div class="overlay" id="popup-info">
      <div class="popup-box">
        <div class="container">
          <div class="title"><h3>Employee Info</h3></div>
            <div class="list-details">
              <div class="column1">
                <div class="list-info-box">
                  <dt class="list-dt">Employee name</dt>
                  <dd class="list-dd"><?php echo $readResult['firstname'], " ", $readResult['lastname'];?></dd>
                </div>

                <div class="list-info-box">
                  <dt class="list-dt">Email</dt>
                  <dd class="list-dd"><?php echo $readResult['email']; ?></dd>
                </div>
              </div>

                <div class="list-info-box">
                  <dt class="list-dt">Address</dt>
                  <dd class="list-dd"><?php echo $readResult['address']; ?></dd>
                </div>
                
                <div class="list-info-box">
                  <dt class="list-dt">Phone</dt>
                  <dd class="list-dd"><?php echo $readResult['phone']; ?></dd>
                </div>
            </div>
            <div class="popup-info-button">
              <a href="./mg_account_manager.php" class="reservation-button-red">Done</a>
            </div>
        </div>
      </div>
</body>
</html>

