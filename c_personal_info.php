<?php session_start();
require './DB_connect.php';
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
    <!-- Personal info navbar -->
    <div class="navbar">
      <nav class="navbar-container">
        <a href="./c_personal_info.php"
          ><img src="./logo/Assumption_University(logo).png" alt="logo"
        /></a>
        <ul class="navbar-left">
          <li>
            <a href="./c_personal_info.php"
              ><h1>online hotel management system</h1></a
            >
          </li>
        </ul>

        <ul class="navbar-right">
          <li>
            <a href="./c_personal_info.php" style="color: #d73938;">personal information</a>
          </li>
          <li>
            <a href="./c_RoomandHotel.php">room & hotel info</a>
          </li>
        </ul>
      </nav>
    </div>

    <!-- Personal information -->
    <h1 class="title_customer">personal information</h1>
    <div class="account-info">
      <table>
        <tr>
          <th class="head">customer name</th>
          <th class="head">address</th>
        </tr>

        <?php
        $email = $_SESSION['email'];
        $sql_account = "SELECT * FROM `Account` WHERE email = ?";
        $stmt_account = $conn->prepare($sql_account);
        $stmt_account->bind_param("s", $email);
        $stmt_account->execute();
        $result_account = $stmt_account->get_result();
        $row_account = mysqli_fetch_array($result_account);


        $email = $_SESSION['email'];
        $sql_customer = "SELECT * FROM `customer` WHERE email = ?";
        $stmt = $conn->prepare($sql_customer);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result_customer = $stmt->get_result();
        $row_customer = mysqli_fetch_array($result_customer);
        ?>
        <tr>
          <td class="sub-head">name<p class="body"><?php echo $row_account['name']; ?></p></td>
          <td class="sub-head">Address (City / State / Country)<p class="body"><?php echo $row_account['address']; ?></p></td>
        </tr>

        <tr>
          <td class="sub-head">surmane<p class="body"><?php echo $row_account['surname']; ?></p></td>
          <th class="head">emergency contact</th>
        </tr>

        <tr>
          <th class="head">date of birth</th>
          <td class="sub-head">name<p class="body"><?php echo $row_customer['emergency_name']; ?></p></td>
        </tr>

        <tr>
          <td class="sub-head">DD/MM/YYYY<p class="body"><?php echo $row_account['birthdate']; ?></p></td>
          <td class="sub-head">telephone<p class="body">099-999-9999</p></td>
        </tr>

        <tr>
        <th class="head">Phone number</th>
        <td class="sub-head">
          <label for="relationship">relationship</label>
          <p class="body"><?php echo $row_customer['relationship']; ?></p>
        </td>
        </tr>

        <tr>
        <td class="sub-head">TEL.XXX-XXX-XXXX<p class="body"><?php echo $row_account['phone']; ?></p></td>
        </tr>
      </table>

      <div class="edit-personal-info">
        <p class="account"><a href="#popup-delete-acc">delete account</a></p> 

        <!-- link to edit page -->
        <a href="./c_edit_personal_info.php">
        <button type="submit" name="submit" class="button">Edit</button>
        </a>
      </div>

      <div class="popup-delete-acc" id="popup-delete-acc">
        <div class="overlay-acc">
            <div class="popup-acc-content">
                <h3>Are you certain to delete this account?</h3>
                <div class="controls">
                  <button type="submit" name="delete" class="yes-btn">yes</button>
                  <a href="#"><button type="submit" name="cancel" class="no-btn">no</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
