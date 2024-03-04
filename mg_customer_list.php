<?php
session_start();
require './DB_connect.php';

// Check if search
if(isset($_GET['search']) && !empty($_GET['search'])) {
    $search = mysqli_real_escape_string($conn, $_GET['search']);
    
    // Query with search
    $sql_customers = "SELECT r.*, a.firstname, a.lastname
                      FROM reservation r
                      LEFT JOIN account a ON r.email = a.email
                      WHERE a.firstname LIKE '%$search%' OR a.lastname LIKE '%$search%'";
} else {
    // Query without search
    $sql_customers = "SELECT r.*, a.firstname, a.lastname
                      FROM reservation r
                      LEFT JOIN account a ON r.email = a.email";
}

$result_accounts = $conn->query($sql_customers);
?>


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
    <div class="list-container">
      <div class="list-title">
        <h2>CUSTOMER LIST</h2>
      </div>
      
      <!-- Customer Head -->
      <div class="list-header">
      <div class="radio-days">
        <input class="radio__input" type="radio" value="day1" id="day1" name="days" checked>
        <label class="radio__label" for="day1"><span id="currentDate"></span></label>

        <input class="radio__input" type="radio" value="day2" id="day2" name="days">
        <label class="radio__label" for="day2"><span id="nextDate"></span></label>

        <input class="radio__input" type="radio" value="day3" id="day3" name="days">
        <label class="radio__label" for="day3"><span id="nextNextDate"></span></label>
      </div>
    </div>

    <script>
      const today = new Date();
      const currentDateElement = document.getElementById('currentDate');
      const nextDateElement = document.getElementById('nextDate');
      const nextNextDateElement = document.getElementById('nextNextDate');

      // Format the date like "Month Day, Year" (e.g., March 4, 2024)
      const formatDate = (date) => {
        const options = { year: 'numeric', month: 'long', day: 'numeric' };
        return date.toLocaleDateString('en-US', options);
      }

      currentDateElement.textContent = formatDate(today);

      // Add one day to get the next date
      const tomorrow = new Date(today.getTime() + (24 * 60 * 60 * 1000));
      nextDateElement.textContent = formatDate(tomorrow);

      // Add two days to get the day after tomorrow
      const dayAfterTomorrow = new Date(tomorrow.getTime() + (24 * 60 * 60 * 1000));
      nextNextDateElement.textContent = formatDate(dayAfterTomorrow);
    </script>

      <!-- Customer Body -->
      <div class="list-body">
        <table class="list-table">
          <thead class="list-thead">
            <tr class="list-tr">
              <th class="list-th" style="text-align: left;">Reservation No.</th>
              <th class="list-th" style="text-align: left;">Customer Name</th>
              <th class="list-th" style="text-align: center;">Agent</th>
              <th class="list-th" style="text-align: center;">Arrive</th>
              <th class="list-th" style="text-align: center;">Depart</th>
            </tr>
          </thead>
          <tbody class="list-tbody">
            <?php
            while ($row = $result_accounts->fetch_assoc()) {
              echo "<tr class='list-tr'>";
              echo "<td class='list-td' style='text-align: left;'>{$row['reservation_no']}</td>";
              echo "<td class='list-td' style='text-align: left;'>{$row['firstname']} {$row['lastname']}</td>";
              echo "<td class='list-td' style='text-align: center;'>{$row['agent']}</td>";
              echo "<td class='list-td' style='text-align: center;'>{$row['arrive_date']}</td>";
              echo "<td class='list-td' style='text-align: center;'>{$row['depart_date']}</td>";
              echo "</tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>

    </div>
  </body>
</html>