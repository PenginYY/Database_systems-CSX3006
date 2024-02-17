<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room & Hotel Info </title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
</head>
<body>

<!-- Room & Hotel navbar-->
<div class="navbar">
      <nav class="navbar-container">
        <a href="personal_info.php"
          ><img src="./logo/Assumption_University(logo).png" alt="logo"
        /></a>
        <ul class="navbar-left">
          <li>
            <a href="personal_info.php"
              ><h1>online hotel management system</h1>
            </a>
          </li>
        </ul>

        <ul class="navbar-right">
          <li>
            <a href="./personal_info.php">personal information</a>
          </li>
          <li>
            <a href="./RoomandHotel.php" style="color: #d73938;">room & hotel info</a>
          </li>
        </ul>
      </nav>
    </div>

    <h1 class="title_customer">Room & Hotel information</h1>

    <!-- Room information-->
    <div class="room-hotel-info">
      <div class="info">
        <h3 class="head">Room Information</h3>
        <table class="room-info">
          <tr>
            <th class="head">resevation number</th>
            <th class="head">guest</th>
          </tr>

          <tr>
            <td class="sub-head">000005</td>
            <td class="sub-head">3 people</td>
          </tr>

          <tr>
            <th class="head">customer name</th>
          </tr>

          <tr>
            <td class="sub-head">Brooklyn Simmons</td>
          </tr>

          <tr>
            <th class="head">room number</th>
          </tr>

          <tr>
            <td class="sub-head">123</td>
          </tr>

          <tr>
            <th class="head">payment</th>
          </tr>

          <tr>
            <td class="sub-head">
              <div class="money-icon">
                <i class="fa-solid fa-wallet" style="margin-right: 20px; margin-top: 10px;">
                </i>cash
                </div>
              </td>
          </tr>
        </table>
      </div>

      <!-- Hotel information -->
      <div class="info">
      <h3 class="head">Hotel Information</h3>
          <table class="room-info">
            <tr>
              <th class="head">email</th>
            </tr>

            <tr>
              <td class="sub-head">cute.hotel@gmail.com</td>
            </tr>

            <tr>
              <th class="head">telephone</th>
            </tr>

            <tr>
              <td class="sub-head">02-333-1010</td>
            </tr>

            <tr>
              <th class="head">address</th>
            </tr>

            <tr>
              <td class="sub-head">123 cute city, thailand koh lan nakorn 
sithammarat rattanakosin road, 22980</td>
            </tr>

            <tr>
              <th class="head">website</th>
            </tr>

            <tr>
              <td class="sub-head"><a href="#" style="color:black;">WWW.CUTE-HOTEL.COM</a></td>
            </tr>
          </table>
      </div>
    </div>
</body>
</html>