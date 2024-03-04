<?php
require './DB_connect.php';
/*
    //Account table
    $email = $_SESSION['email'];
    $sql_account = "SELECT * FROM `account` WHERE email = ?";
    $stmt_account = $conn->prepare($sql_account);
    $stmt_account->bind_param("s", $email);
    $stmt_account->execute();
    $result_account = $stmt_account->get_result();
    $row_account = mysqli_fetch_array($result_account);
    
    //Employee table
    $sql_employee = "SELECT * FROM `employee` WHERE email = ?";
    $stmt = $conn->prepare($sql_employee);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result_employee = $stmt->get_result();
    $row_employee = mysqli_fetch_array($result_employee);
*/
    $sql_accounts = "SELECT *
    FROM `account` AS a, `employee` AS e WHERE a.email= e.email AND a.email= ? ORDER BY a.firstname ASC";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Personal information Page</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- NavBar -->
    <div class="navbar">
      <nav class="navbar-container">
        <a href="mg_edit_account_manager.php"
          ><img src="./logo/Assumption_University(logo).png" alt="logo"
        /></a>
        <ul class="navbar-left">
          <li>
            <a href="mg_edit_account_manager.php">
                <h1>online hotel management system</h1>
            </a>
          </li>
        </ul>
        <!-- To select other features -->
        <ul class="navbar-right">
          <li>
            <a href="./mg_account_manager.php" style="color: #d73938;">account manager</a>
          </li>
          <li>
            <a href="./mg_customer_list.php">customer list</a>
          </li>
        </ul>
      </nav>
    </div>


    <?php
     require_once('./DB_connect.php');
     $email = isset($_GET["email"]) ? $_GET["email"] : null;
     if ($email) {
      $stmt = $conn->prepare("SELECT * FROM `account` AS a, `employee` AS e WHERE a.email= e.email AND a.email= ? ORDER BY a.firstname ASC");
      $stmt->bind_param("s", $email);
      $stmt->execute();
      $result = $stmt->get_result();
  
      if ($result->num_rows > 0) {
          $editResult = $result->fetch_assoc();
      } else {
          echo "email not found: " . $_GET["email"];
      }
  
      $stmt->close();
     }
    ?>
    <form action="./mg_db_edit_account_manager.php" method="post">
      <h1 class="title_customer">edit personal information</h1>
      <div class="account-info">

      <!-- Table -->
      <table class="table-customer-info">
        <tr>
          <!-- Name Title -->
          <th class="head">name</th>
          <!-- Address Title -->
          <th class="head">address</th>
        </tr>

        <tr>
          <!-- Name Input Slot -->
          <td class="sub-head" style="padding-bottom: 0px;">
            <label for="firstname">Name</label>
            <p class="body">
            <input type="text"
            id="firstname"
            name="firstname"
            value="<?php echo $editResult['firstname']; ?>"
            >
            </p>
          </td>
      
            <!-- Address Input Slot -->
            <td class="sub-head" style="padding-bottom: 0px;">
            <label for="address">Address (City / State / Country)</label>
            <p class="body">
              <input
              style="width: 400px; height: 50px;"
              type="text"
              id="address"
              name="address"
              value="<?php echo $editResult['address']; ?>"
              />
              </p>
            </td>
          </tr>

          <tr>
            <!-- Surname Input Slot -->
            <td class="sub-head">surname<p class="body">
              <input type="text"
              id="lastname"
              name="lastname"
              value="<?php echo $editResult['lastname']; ?>"
              >
              </p>
            <!-- Email Input Slot -->
            <td class="head">Email<p class="body">
              <input type="text"
              id="email" 
              name="email"
              value="<?php echo $editResult['email']; ?>"
              >
              </p>
            </tr>

            <tr>
              <!-- DOB Title -->
              <th class="head">date of birth</th>
              <!-- Password Title -->
              <th class="head">Password</th>
            </tr>

            <tr>
              <!-- DOB Input Slot -->
              <td class="sub-head" style="padding-bottom: 0px;">
                <label for="birthdate">DD/MM/YYYY</label>
                <p class="body">
                <input type="date"
                id="birthdate"
                name="birthdate"
                value="<?php echo $editResult['birthdate']; ?>"
                >
                </p>
              </td>
              <!-- Password Input Slot -->
              <td class="sub-head" style="padding-bottom: 0px;">
                <p class="body">
                <input type="text"
                  id="password"
                  name="password"
                  value="<?php echo $editResult['password']; ?>"
                  >
                 </p>
              </td>
            </tr>

            <tr>
              <!-- Phonenumber Title -->
              <th class="head">Phone number</th>
              <!-- Role Title -->
              <td class="head">
                <label for="role">Role</label>
                <!-- Roles options -->
                <p class="body">
                  <select id="role" name="role" style="font-size: 50px; ">
                  <option value="Reservation Staff" <?php if ($editResult['role'] == "Reservation Staff") echo "selected"; ?>>>Reservation Staff</option>
                  <option value="Front Desk Staff" <?php if ($editResult['role'] == "Front Desk Staff") echo "selected"; ?>>>Front Desk Staff</option>
                  </select>
                </p>
              </td>
            </tr>

            <tr>
              <!-- Telephone Input Slot -->
              <td class="sub-head" style="padding-bottom: 0px;">
                <label for="phone">TEL.XXX-XXX-XXXX</label>
                <p class="body">
                <input type="text"
                id="phone"
                name="phone"
                value="<?php echo $editResult['phone']; ?>"
                >
                </p>
              </td>
            </tr>
      </table>
        <div class="edit-personal-info">
          <a href="./mg_account_manager.php"><p class="account">cancel</p></a>
          <!-- link to edit page -->
          <!--<button type="submit" name="submit" class="button">Done</button>-->
          <input type="submit" value="Done" class="reservation-button-red">
          <input type="hidden" name="email" value="<?php echo $email; ?>">
        </div>
      </form>
</body>
</html>