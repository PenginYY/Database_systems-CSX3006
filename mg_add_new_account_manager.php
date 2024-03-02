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

    <h1 class="title_customer">add personal information</h1>
    <div class="account-info">

    <!-- Table -->
    <table action="./mg_db_add_new_account_manager.php" method="POST">
          <tr>
            <!-- Name Title -->
            <th class="head">name</th>
            <!-- Address Title -->
            <th class="head">address</th>
          </tr>

          <tr>
            <!-- Name Input Slot -->
            <td class="sub-head" style="padding-bottom: 0px;">
              <label for="name">Name</label>
              <p class="body">
              <input type="text"
              id="name"
              name="firstName"
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
                id="name"
                name="lastName"
                >
              </p>
          </tr>

          <tr>
            <!-- DOB Title -->
            <th class="head">date of birth</th>
            <!-- Email Title -->
            <th class="head">Email</th>
          </tr>

          <tr>
            <!-- DOB Input Slot -->
            <td class="sub-head" style="padding-bottom: 0px;">
              <label for="dob">DD/MM/YYYY</label>
              <p class="body">
              <input type="text"
                id="dob"
                name="dob"
                >
              </p>
            </td>
            <!-- Email Input Slot -->
            <td class="sub-head" style="padding-bottom: 0px;">
              <p class="body">
              <input type="text"
                id="email"
                name="email"
                >
              </p>
            </td>
          </tr>

          <tr>
            <!-- Phonenumber Title -->
            <th class="head">Phone number</th>

            <!-- Role Title -->
            <td class="head">
              <label for="relationship">Role</label>
              <!-- Roles options -->
              <p class="body">
                <select id="role" name="role" style="font-size: 50px; ">
                <option value="reservation">Reservation Staff</option>
                <option value="front">Front Desk Staff</option>
                </select>
              </p>
            </td>
          </tr>

          <tr>
            <!-- Telephone Input Slot -->
            <td class="sub-head" style="padding-bottom: 0px;">
              <label for="telephone">TEL.XXX-XXX-XXXX</label>
              <p class="body">
              <input type="text"
                id="telephone"
                name="telephone"
                >
              </p>
            </td>
        </table>

      <div class="edit-account-manager-info">
        <p class="account"><a href="#">delete account</a></p> 

        <!-- link to edit page -->
        <a href="./mg_account_manager.php">
        <input type="submit" name="submit" class="button">Add</input>
        </a>
      </div>
    </div>
  </body>
</html>