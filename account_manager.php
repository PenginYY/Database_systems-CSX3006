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
    <title>Account Manager Page</title>
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
  <div class="navbar">
      <nav class="navbar-container">
        <a href="account_manager.php"
          ><img src="./logo/Assumption_University(logo).png" alt="logo"
        /></a>
        <ul class="navbar-left">
          <li>
            <a href="account_manager.php"
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
    
    <div class="account-info">
      <h1>ACCOUNT MANAGER</h1>

      <table>
          <tr>
            <th class="head">Name</th>
            <th class="head">Email</th>
            <th class="head">Role</th>
            <th class="head"> Edit </th>
          </tr>
          <tr>
            <td>Sorracha Panyasakulwong</td>
            <td>beausorracha@gmail.com</td>
            <td>Reservation Staff</td>
            <td> 
              <a href="#" class="button_edit">
                <i class="fa-regular fa-pen-to-square"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td>Pattiya Yiedram</td>
            <td>pattiya.work@gmail.com</td>
            <td>Front Desk</td>
            <td> 
              <a href="#" class="button_edit">
                <i class="fa-regular fa-pen-to-square"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td>Thanachart Thansakul</td>
            <td>thanachart@gmail.com</td>
            <td>Customer</td>
            <td> 
              <a href="#" class="button_edit">
                <i class="fa-regular fa-pen-to-square"></i>
              </a>
            </td>
          </tr>
        </table>
    </div>
    

  </body>