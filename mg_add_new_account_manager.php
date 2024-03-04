<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Personal information Page</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- NavBar -->
    <div class="navbar">
      <nav class="navbar-container">
        <a href="mg_add_new_account_manager.php"
          ><img src="./logo/Assumption_University(logo).png" alt="logo"
        /></a>
        <ul class="navbar-left">
          <li>
            <a href="mg_add_new_account_manager.php">
              <h1>online hotel management system</h1>
            </a>
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

    <form action="./mg_db_add_new_account_manager.php" method="POST">
      <h1 class="title_customer">add personal information</h1>
      <div class="account-info">

      <!-- Table -->
      <table class="table-customer-info">
            <tr>
              <!-- Name Title -->
              <th class="head">name</th>
              <!-- Address Title -->
              <th class="head">address</th>
            </tr>

            <tr>
              <!-- Name Input Slot -->
              <td class="sub-head" style="padding-bottom: 0px;">
                <label for="firstname">Name</label>
                <p class="body">
                <input type="text"
                id="firstname"
                name="firstname"
                >
              </p>
            </td>
    
            <!-- Address Input Slot -->
              <td class="sub-head" style="padding-bottom: 0px;">
              <label for="address">Address (City / State / Country)</label>
              <p class="body">
                <input
                  style="width: 400px; height: 50px;"
                  type="text"
                  id="address"
                  name="address"
                />
              </p>
              </td>
            </tr>

            <tr>
              <!-- Surname Input Slot -->
              <td class="sub-head">surname<p class="body">
                <input type="text"
                  id="lastname"
                  name="lastname"
                  >
                </p>
                <!-- Email Input Slot -->
                <td class="head">Email<p class="body">
                <input type="text"
                  id="email"
                  name="email"
                  >
                </p>

            </tr>

            <tr>
              <!-- DOB Title -->
              <th class="head">date of birth</th>
              <!-- Password Title -->
              <th class="head">Password</th>
            </tr>

            <tr>
              <!-- DOB Input Slot -->
              <td class="sub-head" style="padding-bottom: 0px;">
                <label for="birthdate">DD/MM/YYYY</label>
                <p class="body">
                <input type="date"
                  id="birthdate"
                  name="birthdate"
                  >
                </p>
              </td>
              <!-- Password Input Slot -->
              <td class="sub-head" style="padding-bottom: 0px;">
                <p class="body">
                <input type="text"
                  id="password"
                  name="password"
                  >
                </p>
              </td>
            </tr>

            <tr>
              <!-- Phonenumber Title -->
              <th class="head">Phone number</th>

              <!-- Role Title -->
              <td class="head">
                <label for="role">Role</label>
                <!-- Roles options -->
                <p class="body">
                  <select id="role" name="role" style="font-size: 50px; ">
                  <option value="Reservation Staff">Reservation Staff</option>
                  <option value="Front Desk Staff">Front Desk Staff</option>
                  </select>
                </p>
              </td>
            </tr>

            <tr>
              <!-- Telephone Input Slot -->
              <td class="sub-head" style="padding-bottom: 0px;">
                <label for="phone">TEL.XXX-XXX-XXXX</label>
                <p class="body">
                <input type="text"
                  id="phone"
                  name="phone"
                  >
                </p>
              </td>
          </table>

        <div class="edit-account-manager-info">
          <input type="submit" name="submit" class="button">
        </div>
      </div>
    </form>
  </body>
</html>