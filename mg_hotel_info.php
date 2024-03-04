<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel Information Page</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- Hotel info -->
    <div class="navbar">
      <nav class="navbar-container">
        <a href="mg_hotel_info.php"
          ><img src="./logo/Assumption_University(logo).png" alt="logo"
        /></a>
        <ul class="navbar-left">
          <li>
            <a href="mg_hotel_info.php"
              ><h1>online hotel management system</h1></a
            >
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

    <h1 class="title_customer">Hotel Information</h1>
    <div class="account-info">
      <table>
        <tr>
          <th class="head">Email</th>
          <th class="head">Telephone</th>
        </tr>

        <tr>
          <td><p class="body">Bangkok.hotel@gmail.com</p></td>
          <td><p class="body">02-333-1010</p></td>
        </tr>

        <tr>
          <th class="head">Address</th>
          <th class="head">Website</th>
        </tr>

        <tr>
          <td class="body">99/9 Phra Khanong, Bangkok, Thailand 10260</td>
          <td><p class="body">WWW.INFO@HOTEL.CO</p></td>
        </tr>
      </table>
    </div>
  </body>
</html>