<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Personal information Page</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- Personal info -->
    <div class="navbar">
      <nav class="navbar-container">
        <a href="personal_info.php"
          ><img src="./logo/Assumption_University(logo).png" alt="logo"
        /></a>
        <ul class="navbar-left">
          <li>
            <a href="personal_info.php"
              ><h1>online hotel management system</h1></a
            >
          </li>
        </ul>

        <ul class="navbar-right">
          <li>
            <a href="./personal_info.php">personal information</a>
          </li>
          <li>
            <a href="./RoomandHotel.php">room & hotel info</a>
          </li>
          <li>
            <a href="#">feedback</a>
          </li>
        </ul>
      </nav>
    </div>

    <div class="personal-info">
      <h1 class="title">personal information</h1>

      <table>
        <tr>
          <th class="head">customer name</th>
          <th class="head">address</th>
        </tr>

        <tr>
          <td class="sub-head">name<p class="body">John</p></td>
          <td class="body">123 cute city, thailand koh lan nakorn 
            sithammarat rattanakosin road, 22980</td>
        </tr>

        <tr>
          <td class="sub-head">surmane<p class="body">Smith</p></td>
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

      <div class="edit-personal-info">
        <!-- link to pop up page -->
        <p class="account"><a href="#">delete account</a></p> 

        <!-- link to edit page -->
        <a href="#">
        <button type="submit" name="submit" class="button">Edit</button>
        </a>
      </div>
    </div>
  </body>
</html>