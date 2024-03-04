<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Check-out</title>
  <link rel="stylesheet" href="style.css"/>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />
</head>
<body>
  <!-- Check-out Navbar -->
  <div class="navbar">
    <nav class="navbar-container">
      <a href="f_checkout_waiting.php">
        <img src="./logo/Assumption_University(logo).png" alt="logo"/>
      </a>
      <ul class="navbar-left">
        <li>
          <a href="f_checkout_waiting.php">
            <h1>online hotel management system</h1>
          </a>
        </li>
      </ul>

      <ul class="navbar-right">
        <li>
          <a href="f_checkin_waiting.php">customer check-in</a>
        </li>
        <li>
          <a style="color:#d73938;" href="f_checkout_waiting.php">customer check-out</a>
        </li>
      </ul>
    </nav>
  </div>

  <!-- Check-out -->
  <div class="list-container">
    <div class="list-title">
      <h2>CUSTOMER CHECK-OUT</h2>
    </div>

    <!-- Check-out Head - Radio (WAITING LIST | IN-HOUSE) -->
    <div class="list-header">
      <div class="radio-days">
        <input class="radio__input" type="radio" value="checkoutwaiting" id="checkoutwaiting" name="checkout_radio" checked>
        <a href="f_checkout_waiting.php" class="radio__label" for="checkoutwaiting">WAITING LIST</a>
        <input class="radio__input" type="radio" value="checkoutinhouse" id="checkoutinhouse" name="checkout_radio">
        <a href="f_checkout_inhouse.php" class="radio__label" for="checkoutinhouse">IN-HOUSE</a>
      </div>
    </div>
    
    <!-- Check-in Body -->
    <div class="list-body">
      <table class="list-table">
        <thead class="list-thead">
          <tr class="list-tr">
            <th class="list-th" style="text-align: left;"> Reservation No. </th>
            <th class="list-th" style="text-align: left;"> Customer Name </th>
            <th class="list-th" style="text-align: center;"> Agent </th>
            <th class="list-th" style="text-align: center;"> Arrive </th>
            <th class="list-th" style="text-align: center;"> Depart </th>
          </tr>
        </thead>
        <tbody class="list-tbody">
          <tr class="list-tr">
            <td class="list-td" style="text-align: left;"> 000001 </td>
            <td class="list-td" style="text-align: left;"><a href="#popup-in-house" style="text-decoration: none; color: black;"> Chayapat Pangpon </a></td>
            <td class="list-td" style="text-align: center;"> Agoda </td>
            <td class="list-td" style="text-align: center;"> 04/11/23 </td>
            <td class="list-td" style="text-align: center;"> 05/11/23 </td>
            <td class="list-td" style="text-align: center;">
              <a href="#popup-waitinglist" class="reservation-button-red">Select</a>
            </td>
          </tr>
          <tr class="list-tr">
            <td class="list-td" style="text-align: left;"> 000003 </td>
            <td class="list-td" style="text-align: left;"><a href="#popup-info" style="text-decoration: none; color: black;"> Brooklyn Simmons </a></td>
            <td class="list-td" style="text-align: center;"> Walk-in </td>
            <td class="list-td" style="text-align: center;"> 04/11/23 </td>
            <td class="list-td" style="text-align: center;"> 05/11/23 </td>
            <td class="list-td" style="text-align: center;">
              <a href="#popup-waitinglist" class="reservation-button-red">Select</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  

  <!-- Select Waiting List -->
  <div class="overlay" id="popup-waitinglist">
    <div class="popup-box">
      <div class="container">
        <div class="title"><h3>Customer Check-out</h3></div>
        <div class="list-details">
        
          <div class="column1">
            <div class="list-info-box">
              <dt class="list-dt">Reservation No.</dt>
              <dd class="list-dd">000001</dd>
            </div>
            <div class="list-info-box">
              <dt class="list-dt">Email</dt>
              <dd class="list-dd">chayapat@gmail.com</dd>
            </div>
          </div>

          <div class="list-info-box">
            <dt class="list-dt">Customer Name</dt>
            <dd class="list-dd">Chayapat Pangpond</dd>
          </div>
          
          <div class="column4">
            <div class="list-info-box">
              <dt class="list-dt">Agent</dt>
              <dd class="list-dd">Agoda</dd>
            </div>
            <div class="list-info-box">
              <dt class="list-dt">Arriving Date</dt>
              <dd class="list-dd">04/11/23</dd>
            </div>
            <div class="list-info-box">
              <dt class="list-dt">Departure Date</dt>
              <dd class="list-dd">05/11/23</dd>
            </div>
          </div>
          
          <div class="column4">
            <div class="list-info-box">
              <dt class="list-dt">Total Room(s)</dt>
              <dd class="list-dd">01</dd>
            </div>
            <div class="list-info-box">
              <dt class="list-dt">Room No.</dt>
              <dd class="list-dd">001 - 001</dd>
            </div>
            <div class="list-info-box">
              <dt class="list-dt">Paid Amount</dt>
              <dd class="list-dd">1,600.00</dd>
            </div>
          </div>
        
        </div>
        <div class="popup-add-button">
          <a href="#" class="reservation-button-red">Check-out</a> <!--need to change href to delete database-->
          <a href="#" class="reservation-button-black">Cancel</a>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
