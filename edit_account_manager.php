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
        <a href="edit_account_manager.php"
          ><img src="./logo/Assumption_University(logo).png" alt="logo"
        /></a>
        <ul class="navbar-left">
          <li>
            <a href="edit_account_manager.php">
                <h1>online hotel management system</h1>
            </a>
          </li>
        </ul>
        <!-- To select other features -->
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

    <h1 class="title_customer">add personal information</h1>
    <div class="account-info">
      <table>
        <tr>
          <th class="head">customer name</th>
          <th class="head">address</th>
        </tr>

        <tr>
          <td class="sub-head">name<p class="body">Brooklyn</p></td>
          <td class="body">123 cute city, thailand koh lan nakorn 
            sithammarat rattanakosin road, 22980</td>
        </tr>

        <tr>
          <td class="sub-head">surmane<p class="body">Simmons</p></td>
        </tr>

        <tr>
          <th class="head">date of birth</th>
          <th class="head">emergency call</th>
        </tr>

        <tr>
          <td><p class="body">12 October 1987</p></td>
          <td class="sub-head">name<p class="body">Esther Howard</p></td>
        </tr>

        <tr>
        <th class="head">Phone number</th>
        <td class="sub-head">telephone<p class="body">099-999-9999</p></td>
        </tr>

        <tr>
        <td><p class="body">088-888-8888</p></td>
        <td class="sub-head">relationship<p class="body">father</p></td>
        </tr>
      </table>

      <div class="add-new-account-manager">
        <p class="account"><a href="#">delete account</a></p> 

        <!-- link to edit page -->
        <a href="./add_new_account_manager.php">
        <button type="submit" name="submit" class="button">Done</button>
        </a>
      </div>
    </div>
  </body>
</html>