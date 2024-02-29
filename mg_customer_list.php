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
    <div class="reservation">
      <div class="reservation-title">
        <h2>CUSTOMER LIST</h2>
      </div>
      
      <!-- Customer Head -->
      <div class="reservation-header">
        <div class="radio-days">
          <input class="radio__input" type="radio" value="day1" name="days" id="day1">
          <label class="radio__label" for="day1"> YESTERDAY </label>
          <input class="radio__input" type="radio" value="day2" name="days" id="day2" checked>
          <label class="radio__label" for="day2"> TODAY </label>
          <input class="radio__input" type="radio" value="day3" name="days" id="day3">
          <label class="radio__label" for="day3"> TOMORROW </label>
        </div>
        <div class="search-container">
          <form class="search">
              <input class="search-input" type="search" placeholder="Search">
              <i class="fa-solid fa-magnifying-glass"></i>
          </form>
        </div>
      </div>

      <!-- Customer Body -->
      <div class="reservation-body">
        <table class="res-table">
          <thead class="res-thead">
            <tr class="res-tr">
              <th class="res-th" style="text-align: left;">Reservation No.</th>
              <th class="res-th" style="text-align: left;">Customer Name</th>
              <th class="res-th" style="text-align: center;">Agent</th>
              <th class="res-th" style="text-align: center;">Arrive</th>
              <th class="res-th" style="text-align: center;">Depart</th>
              <th class="res-th" style="text-align: center;">Status</th>
            </tr>
          </thead>
          <tbody class="res-tbody">
            <tr class="res-tr">
              <td class="res-td" style="text-align: left;">00001</td>
              <td class="res-td" style="text-align: left;">Chayapat Pangpond</td>
              <td class="res-td" style="text-align: center;">Agoda</td>
              <td class="res-td" style="text-align: center;">04/11/23</td>
              <td class="res-td" style="text-align: center;">05/11/23</td>
              <td class="res-td" style="text-align: center;">Checked-Out</td>
            </tr>
            <tr class="res-tr">
              <td class="res-td" style="text-align: left;">00002</td>
              <td class="res-td" style="text-align: left;">Esther Howard</td>
              <td class="res-td" style="text-align: center;">Booking.com</td>
              <td class="res-td" style="text-align: center;">04/11/23</td>
              <td class="res-td" style="text-align: center;">06/11/23</td>
              <td class="res-td" style="text-align: center;">In-house</td>
            </tr>
            <tr class="res-tr">
              <td class="res-td" style="text-align: left;">00003</td>
              <td class="res-td" style="text-align: left;">Brooklyn Simmons</td>
              <td class="res-td" style="text-align: center;">Walk-in</td>
              <td class="res-td" style="text-align: center;">04/11/23</td>
              <td class="res-td" style="text-align: center;">05/11/23</td>
              <td class="res-td" style="text-align: center;">Waiting</td>
            </tr>
            <tr class="res-tr">
              <td class="res-td" style="text-align: left;">00004</td>
              <td class="res-td" style="text-align: left;">Savannah Nguyen</td>
              <td class="res-td" style="text-align: center;">Walk-in</td>
              <td class="res-td" style="text-align: center;">04/11/23</td>
              <td class="res-td" style="text-align: center;">11/11/23</td>
              <td class="res-td" style="text-align: center;">In-house</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    </div>
  </body>
</html>