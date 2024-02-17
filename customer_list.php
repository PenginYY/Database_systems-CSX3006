<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Customer List Page</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    
    <!-- Customer List -->
    <div class="navbar">
      <nav class="navbar-container">
        <a href="customer_list.php"
          ><img src="./logo/Assumption_University(logo).png" alt="logo"
        /></a>
        <ul class="navbar-left">
          <li>
            <a href="customer_list.php"
              ><h1>online hotel management system</h1></a
            >
          </li>
        </ul>

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

    <!-- Customer List -->
      <div class="account-info">
        <h1>CUSTOMER LIST</h1>

        <div class="radio-days">
          <input class="radio__input" type="radio" value="day1" name="days" id="day1">
          <label class="radio__label" for="day1"> YESTERDAY </label>
          <input class="radio__input" type="radio" value="day2" name="days" id="day2">
          <label class="radio__label" for="day2"> TODAY </label>
          <input class="radio__input" type="radio" value="day3" name="days" id="day3">
          <label class="radio__label" for="day3"> TOMORROW </label>
        </div>

        <table>
          <tr>
            <th class="head">Reservation No.</th>
            <th class="head">Customer Name</th>
            <th class="head">Agent</th>
            <th class="head">Arrive</th>
            <th class="head">Depart</th>
            <th class="head">Status</th>
          </tr>
          <tr>
            <td>00001</td>
            <td>Chayapat Pangpond</td>
            <td>Agoda</td>
            <td>04/11/23</td>
            <td>05/11/23</td>
            <td>Checked-out</td>
          </tr>
          <tr>
            <td>00002</td>
            <td>Esther Howard</td>
            <td>Booking.com</td>
            <td>04/11/23</td>
            <td>06/11/23</td>
            <td>In-house</td>
          </tr>
          <tr>
            <td>00003</td>
            <td>Brooklyn Simmons</td>
            <td>Walk-in</td>
            <td>04/11/23</td>
            <td>05/11/23</td>
            <td>Waiting</td>
          </tr>
        </table>
    </div>
  </body>
</html>