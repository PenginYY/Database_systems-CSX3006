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
    <title>Reservation Page</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>

    <!-- Rservation Navbar -->
    <div class="navbar">
      <nav class="navbar-container">
        <a href="#" class="logo">
          <img src="./logo/Assumption_University(logo).png" alt="logo"/>
        </a>
        <ul class="navbar-left">
          <li>
            <a href="#"><h1>online hotel management system</h1></a>
          </li>
        </ul>

        <ul class="navbar-right">
          <li>
            <a href="#">reservation list</a>
          </li>
        </ul>
      </nav>
    </div>

    <!-- Rservation -->
    <div class="reservation">
      <div class="reservation-title">
        <h2>RESERVATIONS</h2>
      </div>

      <!-- Rservation Head -->
      <div class="reservation-header">
        <div class="radio-days">
          <input class="radio__input" type="radio" value="day1" id="day1" name="days">
          <label class="radio__label" for="day1"> 4 NOVEMBER 2023 </label>
          <input class="radio__input" type="radio" value="day2" id="day2" name="days">
          <label class="radio__label" for="day2"> 5 NOVEMBER 2023 </label>
          <input class="radio__input" type="radio" value="day3" id="day3" name="days">
          <label class="radio__label" for="day3"> 6 NOVEMBER 2023 </label>
        </div>
        
        <a href="#popup-add" class="reservation-button-red">Add</a>
      </div>
      
      <!-- Rservation Body -->
      <div class="reservation-body">
        <table class="res-table">
          <thead class="res-thead">
            <tr class="res-tr">
              <th class="res-th" style="text-align: left;"> Reservation No. </th>
              <th class="res-th" style="text-align: left;"> Customer Name </th>
              <th class="res-th" style="text-align: center;"> Agent </th>
              <th class="res-th" style="text-align: center;"> Arrive </th>
              <th class="res-th" style="text-align: center;"> Depart </th>
              <th class="res-th" style="text-align: center;"> Edit </th>
            </tr>
          </thead>
          <tbody class="res-tbody">
            <tr class="res-tr">
              <td class="res-td" style="text-align: left;"> 000001 </td>
              <td class="res-td" style="text-align: left;"><a href="#popup-info" style="text-decoration: none; color: black;"> Chayapat Pangpon </a></td>
              <td class="res-td" style="text-align: center;"> Agoda </td>
              <td class="res-td" style="text-align: center;"> 04/11/23 </td>
              <td class="res-td" style="text-align: center;"> 05/11/23 </td>
              <td class="res-td" style="text-align: center;"> 
                <a href="#popup-edit" class="reservation-button-edit">
                  <i class="fa-regular fa-pen-to-square"></i>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    
    <!-- Rservation Add -->
    <div class="overlay" id="popup-add">
      <div class="popup-box">
        <div class="container">
          <div class="title"><h3>Add Reservation</h3></div>
          <form action="#">
            <div class="reservation-details">
              
              <div class="column1">
                <div class="input-box">
                  <label for="res-number-a">Reservation Number</label>
                  <dd class="res-dd">000001</dd>
                </div>
                <div class="input-box">
                  <label for="total-guest-a">Number of Room</label>
                  <input type="text" id="total-guest-a" name="total-guest" placeholder="Enter number of room" required>
                </div>
              </div>
              
              <div class="input-box">
                <label for="cus-name-a">Customer Name</label>
                <input type="text" id="cus-name-a" name="cus-name" placeholder="Enter customer name" required>
              </div>
              
              <div class="column2">
                <div class="input-box">
                  <label for="agent-a">Agent</label>
                  <input type="text" id="agent-a" name="agent" placeholder="Enter agent" required>
                </div>
                <div class="input-box">
                  <label for="arr-date-a">Arriving Date</label>
                  <input type="text" id="arr-date-a" name="arr-date" placeholder="00/00/00" required>
                </div>
                <div class="input-box">
                  <label for="dep-date-a">Departure Date</label>
                  <input type="text" id="dep-date-a" name="dep-date" placeholder="00/00/00" required>
                </div>
              </div>

            </div>
            <div class="popup-add-button">
              <a href="#" class="reservation-button-red"> Add </a>
              <a href="#" class="reservation-button-black">Cancel</a>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Rservation Edit -->
    <div class="overlay" id="popup-edit">
      <div class="popup-box">
        <div class="container">
          <div class="title"><h3>Edit Reservation</h3></div>
          <form action="#">
            <div class="reservation-details">
              
              <div class="column1">
                <div class="input-box">
                  <label for="res-number-e">Reservation Number</label>
                  <dd class="res-dd">000001</dd>
                </div>
                <div class="input-box">
                  <label for="total-guest-e">Number of Room</label>
                  <input type="text" id="total-guest-e" name="total-guest" placeholder="316" required>
                </div>
              </div>
              
              <div class="input-box">
                <label for="cus-name-e">Customer Name</label>
                <input type="text" id="cus-name-e" name="cus-name" placeholder="Chayapat Pangpon" required>
              </div>
              
              <div class="column2">
                <div class="input-box">
                  <label for="agent-e">Agent</label>
                  <input type="text" id="agent-e" name="agent" placeholder="Agoda" required>
                </div>
                <div class="input-box">
                  <label for="arr-date-e">Arriving Date</label>
                  <input type="text" id="arr-date-e" name="arr-date" placeholder="04/11/23" required>
                </div>
                <div class="input-box">
                  <label for="dep-date-e">Departure Date</label>
                  <input type="text" id="dep-date-e" name="dep-date" placeholder="05/11/23" required>
                </div>
              </div>

            </div>
            <div class="popup-edit-button">
              <a href="#" class="reservation-button-black">Delete</a> <!--need to change href to delete database-->
              <a href="add.php" class="reservation-button-red"> Add </a>
              <a href="#" class="reservation-button-black">Cancel</a>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Rservation Info -->
    <div class="overlay" id="popup-info">
      <div class="popup-box">
        <div class="container">
          <div class="title"><h3>Reservation Info</h3></div>
            <div class="reservation-details">
              
              <div class="column1">
                <div class="res-info-box">
                  <dt class="res-dt">Reservation Number</dt>
                  <dd class="res-dd">000001</dd>
                </div>
                <div class="res-info-box">
                  <dt class="res-dt">Number of Room</dt>
                  <dd class="res-dd">1</dd>
                </div>
              </div>
              
              <div class="res-info-box">
                <dt class="res-dt">Customer Name</dt>
                <dd class="res-dd">Chayapat Pangpon</dd>
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
            
            </div>
            <div class="popup-info-button">
              <a href="#" class="reservation-button-red">Done</a>
            </div>
        </div>
      </div>
    </div>

  </body>
</html>