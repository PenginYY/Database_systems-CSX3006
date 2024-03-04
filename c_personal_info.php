<?php session_start();
require './DB_connect.php';

    //Query account data & customer data
    $email = $_SESSION['email'];
    $sql_customer_data = "SELECT * FROM `account` AS a, `customer` AS c WHERE a.email = ? AND a.email=c.email";
    $stmt_customer_data = $conn->prepare($sql_customer_data);
    $stmt_customer_data->bind_param("s", $email);
    $stmt_customer_data->execute();
    $result_customer_data = $stmt_customer_data->get_result();
    $row_customer_data = mysqli_fetch_array($result_customer_data);

    //Check reservation
    $sql_reservation = "SELECT * FROM `reservation` WHERE email = ?";
    $stmt_reservation = $conn->prepare($sql_reservation);
    $stmt_reservation->bind_param("s", $email);
    $stmt_reservation->execute();
    $result_reservation = $stmt_reservation->get_result();
    $row_reservation = mysqli_fetch_array($result_reservation);

    $rowcount_rev = mysqli_num_rows($result_reservation);
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
          <li>
            <a href="./c_db_logout.php">Logout</a>
          </li>
        </ul>
      </nav>
    </div>

    <!-- Personal information -->
    <h1 class="title_customer">personal information</h1>
    <div class="account-info">
      <table class="table-customer-info">
        <tr>
          <th class="head">customer name</th>
          <th class="head">address</th>
        </tr>

        <tr>
          <td class="sub-head">name<p class="body">
            <?php echo $row_customer_data['firstname']; ?></p>
          </td>
          <td class="sub-head">Address (City / State / Country)
            <p class="body"><?php echo $row_customer_data['address']; ?></p>
          </td>
        </tr>

        <tr>
          <td class="sub-head">surmane
            <p class="body"><?php echo $row_customer_data['lastname']; ?></p>
          </td>
          <th class="head">emergency contact</th>
        </tr>

        <tr>
          <th class="head">date of birth</th>
          <td class="sub-head">name
            <p class="body"><?php echo $row_customer_data['emergency_name']; ?></p>
            </td>
        </tr>

        <tr>
          <td class="sub-head">YYYY/MM/DD
            <p class="body"><?php echo $row_customer_data['birthdate']; ?></p>
          </td>
          <td class="sub-head">telephone<p class="body">
            <?php echo $row_customer_data['emergency_phone']; ?></p>
          </td>
        </tr>

        <tr>
        <th class="head">Phone number</th>
        <td class="sub-head">
          <label for="relationship">relationship</label>
          <p class="body">
            <?php echo $row_customer_data['emergency_relationship']; ?>
          </p>
        </td>
        </tr>

        <tr>
        <td class="sub-head">TEL.XXX-XXX-XXXX
          <p class="body"><?php echo $row_customer_data['phone']; ?></p>
        </td>
        </tr>
      </table>

      <div class="edit-personal-info">
        <p class="account">
          <a <?php $href = $rowcount_rev !== 0 ? "#" : "#popup-delete-acc";
          echo "href='$href'";
          ?>
          >delete account</a>
        </p> 

        <!-- link to edit page -->
        <a href="./c_edit_personal_info.php">
        <button type="submit" name="submit" class="button">Edit</button>
        </a>
      </div>

      <form action="./c_db_delete_account.php" method="POST">
      <div class="popup-delete-acc" id="popup-delete-acc">
        <div class="overlay-acc">
            <div class="popup-acc-content" style="text-align: center;">
                <h3>Are you certain to delete this account?</h3>
                <div class="controls">
                  <button type="submit" name="delete" class="yes-btn"
                  >yes</button>
                  <button type="submit" name="cancel" class="no-btn">no</button>
            </div>
          </div>
        </div>
      </div>
      </form>

    </div>
  </body>
</html>
