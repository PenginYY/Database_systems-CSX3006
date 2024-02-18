<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CUSTOMER CHECK-OUT</title>
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
  <!-- Check-in Navbar -->
  <div class="navbar">
    <nav class="navbar-container">
      <a href="check_in.php">
        <img src="./logo/Assumption_University(logo).png" alt="logo"/>
      </a>
      <ul class="navbar-left">
        <li>
          <a href="check_in.php">
            <h1>online hotel management system</h1>
          </a>
        </li>
      </ul>

      <ul class="navbar-right">
        <li>
          <a href="./f_check_in.php">customer check-in</a>
        </li>
        <li>
          <a style="color:#d73938;" href="./f_check_out.php">customer check-out</a>
        </li>
      </ul>
    </nav>
  </div>

  <!-- Check-in -->
  <div class="reservation">
    <div class="reservation-title">
      <h2>CUSTOMER CHECK-OUT</h2>
    </div>

    <!-- Check-in Head -->
    <div class="reservation-header">
      <div class="radio-days">
        <input class="radio__input" type="radio" value="waitinglist" id="waitinglist" name="wait_in" checked>
        <a href="./f_check_out.php" class="radio__label" for="waitinglist">WAITING LIST</a>
        <input class="radio__input" type="radio" value="inhouse" id="inhouse" name="wait_in">
        <a href="./f_check_out-inhouse.php" class="radio__label" for="inhouse">IN-HOUSE</a>
      </div>
    </div>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Check the radio button corresponding to the current page
      document.getElementById("waitinglist").checked = true;
    });
    </script>
    
    <!-- Check-in Body -->
    <div class="reservation-body">
      <table class="res-table">
        <thead class="res-thead">
          <tr class="res-tr">
            <th class="res-th" style="text-align: left;"> Reservation No. </th>
            <th class="res-th" style="text-align: left;"> Customer Name </th>
            <th class="res-th" style="text-align: center;"> Agent </th>
            <th class="res-th" style="text-align: center;"> Arrive </th>
            <th class="res-th" style="text-align: center;"> Depart </th>
          </tr>
        </thead>
        <tbody class="res-tbody">
          <tr class="res-tr">
            <td class="res-td" style="text-align: left;"> 000001 </td>
            <td class="res-td" style="text-align: left;"><a href="#popup-in-house" style="text-decoration: none; color: black;"> Chayapat Pangpon </a></td>
            <td class="res-td" style="text-align: center;"> Agoda </td>
            <td class="res-td" style="text-align: center;"> 04/11/23 </td>
            <td class="res-td" style="text-align: center;"> 05/11/23 </td>
            <td class="res-td" style="text-align: center;">
              <a href="#popup-waitinglist" class="reservation-button-red">Select</a>
            </td>
          </tr>
          <tr class="res-tr">
            <td class="res-td" style="text-align: left;"> 000003 </td>
            <td class="res-td" style="text-align: left;"><a href="#popup-info" style="text-decoration: none; color: black;"> Brooklyn Simmons </a></td>
            <td class="res-td" style="text-align: center;"> Walk-in </td>
            <td class="res-td" style="text-align: center;"> 04/11/23 </td>
            <td class="res-td" style="text-align: center;"> 05/11/23 </td>
            <td class="res-td" style="text-align: center;">
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
        <div class="reservation-details">
        
          <div class="column1">
            <div class="res-info-box">
              <dt class="res-dt">Reservation No.</dt>
              <dd class="res-dd">000001</dd>
            </div>
            <div class="res-info-box">
              <dt class="res-dt">Customer Name</dt>
              <dd class="res-dd">Chayapat Pangpond</dd>
            </div>
          </div>
          
          <div class="column2">
            <div class="res-info-box">
              <dt class="res-dt">Agent</dt>
              <dd class="res-dd">Agoda</dd>
            </div>
            <div class="res-info-box">
              <dt class="res-dt">Arriving Date</dt>
              <dd class="res-dd">04/11/23</dd>
            </div>
            <div class="res-info-box">
              <dt class="res-dt">Departure Date</dt>
              <dd class="res-dd">05/11/23</dd>
            </div>
          </div>
          
          <div class="column1">
            <div class="res-info-box">
              <dt class="res-dt">Total Room(s)</dt>
              <dd class="res-dd">01</dd>
            </div>
            <div class="res-info-box">
              <dt class="res-dt">Paid Amount</dt>
              <dd class="res-dd">1,600.00</dd>
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
