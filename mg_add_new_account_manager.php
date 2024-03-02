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
    <table>
          <tr>
            <th class="head">name</th>
            <th class="head">address</th>
          </tr>

          <tr>
            <td class="sub-head" style="padding-bottom: 0px;">
              <label for="name">Name</label>
              <p class="body">
              <input type="text"
              id="name"
              name="name"
              >
            </p>
          </td>

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
            <td class="sub-head">surname<p class="body">
              <input type="text"
                id="name"
                name="name"
                >
              </p>
          </tr>

          <tr>
            <th class="head">date of birth</th>
            <th class="head">Email</th>
          </tr>

          <tr>
            <td class="sub-head" style="padding-bottom: 0px;">
              <label for="dob">DD/MM/YYYY</label>
              <p class="body">
              <input type="text"
                id="dob"
                name="dob"
                >
              </p>
            </td>
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
            <th class="head">Phone number</th>
            <td class="head">
              <label for="relationship">Role</label>
              <p class="body">
                <select id="relationships" name="relationships" style="font-size: 15px; ">
                <option value="customer">Customer</option>
                <option value="reservation">Reservation Staff</option>
                <option value="frontDesk">Front Desk Staff</option>
                </select>
              </p>
            </td>
          </tr>

          <tr>
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
        <button type="submit" name="submit" class="button">Add</button>
        </a>
      </div>
    </div>
  </body>
</html>