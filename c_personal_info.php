<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Personal information Page</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- Personal info navbar -->
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
            <a href="./c_personal_info.php" style="color: #d73938;">personal information</a>
          </li>
          <li>
            <a href="./c_RoomandHotel.php">room & hotel info</a>
          </li>
        </ul>
      </nav>
    </div>

    <!-- Personal information -->
    <h1 class="title_customer">personal information</h1>
    <div class="account-info">
      <table>
        <tr>
          <th class="head">customer name</th>
          <th class="head">address</th>
        </tr>

        <tr>
          <td class="sub-head">name<p class="body">Brooklyn</p></td>
          <td class="sub-head">Address (City / State / Country)<p class="body">123 cute city, thailand koh lan nakorn 
            sithammarat rattanakosin road, 22980</p></td>
        </tr>

        <tr>
          <td class="sub-head">surmane<p class="body">Simmons</p></td>
          <th class="head">emergency contact</th>
        </tr>

        <tr>
          <th class="head">date of birth</th>
          <td class="sub-head">name<p class="body">Esther Howard</p></td>
        </tr>

        <tr>
          <td class="sub-head">DD/MM/YYYY<p class="body">12 October 1987</p></td>
          <td class="sub-head">telephone<p class="body">099-999-9999</p></td>
        </tr>

        <tr>
        <th class="head">Phone number</th>
        <td class="sub-head">
          <label for="relationship">relationship</label>
          <p class="body">
          <select id="relationships" name="relationships" style="font-size: 50px;">
            <option value="parent">Parent</option>
            <option value="sibling">Sibling</option>
            <option value="relative">Relative</option>
            <option value="friend">Friend</option>
            <option value="other">Other</option>
          </select>
          </p>
        </td>
        </tr>

        <tr>
        <td class="sub-head">TEL.XXX-XXX-XXXX<p class="body">088-888-8888</p></td>
        </tr>
      </table>

      <div class="edit-personal-info">
        <p class="account"><a href="#popup-delete-acc">delete account</a></p> 

        <!-- link to edit page -->
        <a href="./c_edit_personal_info.php">
        <button type="submit" name="submit" class="button">Edit</button>
        </a>
      </div>

      <div class="popup-delete-acc" id="popup-delete-acc">
        <div class="overlay-acc">
            <div class="popup-acc-content">
                <h3>Are you certain to delete this account?</h3>
                <div class="controls">
                  <a href="./c_index.php"><button type="submit" name="submit" class="yes-btn">yes</button></a>
                  <a href="#"><button type="submit" name="submit" class="no-btn">no</button></a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </body>
</html>
