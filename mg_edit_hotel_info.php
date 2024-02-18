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

    <h1 class="title_customer">Edit Hotel Information</h1>
    <div class="account-info">
      <table>
        <tr>
          <th class="head">Email</th>
          <th class="head">Telephone</th>
        </tr>

        <tr>
            <td class="sub-head" style="padding-bottom: 0px;">
              <p class="body">
              <input type="text"
              id="email"
              name="email"
              value="cute.hotel@gmail.com"
              >
              </p>
            </td>

            <td class="sub-head" style="padding-bottom: 0px;">
              <p class="body">
              <input type="text"
              id="telephone"
              name="telephone"
              value="02-333-1010"
              >
              </p>
            </td>
        </tr>

        <tr>
          <th class="head">Address</th>
          <th class="head">Website</th>
        </tr>

        <tr>
            <td class="sub-head" style="padding-bottom: 0px;">
              <p class="body">
              <input type="text"
              id="address"
              name="address"
              value="123 cute city, thailand koh lan nakorn sithammarat rattanakosin road, 22980"
              >
              </p>
            </td>

            <td class="sub-head" style="padding-bottom: 0px;">
              <p class="body">
              <input type="text"
              id="website"
              name="website"
              value="www.hotel.com"
              >
              </p>
            </td>
        </tr>
      </table>

      <div class="edit-hotel-info" style="text-align: right;">
        <!-- link to edit page -->
        <a href="./mg_hotel_info.php">
        <button type="submit" name="submit" class="reservation-button-red">Done</button>
        </a>
      </div>
    </div>
  </body>
</html>