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
        <a href="account_manager.php"
          ><img src="./logo/Assumption_University(logo).png" alt="logo"
        /></a>
        <ul class="navbar-left">
          <li>
            <a href="account_manager.php"
              ><h1>online hotel management system</h1></a
            >
          </li>
        </ul>
        <!-- To select other features -->
        <ul class="navbar-right">
          <li>
            <a href="./account_manager.php">account manager</a>
          </li>
          <li>
            <a href="./customer_list.php">customer list</a>
          </li>
        </ul>
      </nav>
    </div>
          
    <div class="reservation">
      <div class="account-title">
        <h2>ACCOUNT MANAGER</h2>
      </div>

      <!-- Header -->
      <div class="reservation-header">
        <div class="hotel-info-manager">
          <!-- link to edit page -->
          <a href="./hotel_info.php">
          <button type="button" name="Hotel Info" class="reservation-button-red">Hotel Info</button>
          </a>
        </div>
        <div class="add-new-account-manager">
          <!-- link to edit page -->
          <a href="./add_new_account_manager.php">
          <button type="button" name="Add" class="reservation-button-red">Add</button>
          </a>
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
            <tr class="res-tr">
              <td class="res-td" style="text-align: left;"><a href="#popup-info" style="text-decoration: none; color: black;"> Chayapat Pangpon </a></td>
              <td class="res-td" style="text-align: left;"> chayapat@gmail.com </td>
              <td class="res-td" style="text-align: left;"> Reservation Staff </td>
              <td class="res-td" style="text-align: center;"> 
                <a href="./edit_account_manager" class="reservation-button-edit">
                  <i class="fa-regular fa-pen-to-square"></i>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </body>