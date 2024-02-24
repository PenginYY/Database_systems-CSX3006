<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Personal Infomation</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="navbar">
      <nav class="navbar-container">
        <a href="./c_personal_info.php"
          ><img src="./logo/Assumption_University(logo).png" alt="logo"
        /></a>
        <ul class="navbar-left">
          <li>
            <a href="./c_personal_info.php">
              <h1>online hotel management system</h1>
            </a
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

    <h1 class="title_customer">personal information</h1>
    <div class="account-info">
      <table>
        <tr>
          <th class="head">customer name</th>
          <th class="head">address</th>
        </tr>

        <tr>
          <td class="sub-head" style="padding-bottom: 0px;">
            <label for="name">Name</label>
            <p class="body">
            <input type="text"
            id="name"
            name="name"
            value="Brooklyn"
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
              value="123 cute city, thailand koh lan nakorn sithammarat rattanakosin road, 22980"
            />
          </p>
          </td>
        </tr>

        <tr>
          <td class="sub-head" style="padding-bottom: 0px;">
              <label for="surname">surname</label>
              <p class="body">
              <input type="text"
              id="surname"
              name="surname"
              value="Simmons"
              >
              </p>
          </td>
          <th class="head">emergency call</th>
        </tr>

        <tr>
          <th class="head">date of birth</th>
          <td class="sub-head" style="padding-bottom: 0px;">
            <label for="name">name</label>
            <p class="body">
            <input type="text"
              id="name"
              name="name"
              value="Esther Howard"
              >
            </p>
          </td>
        </tr>

        <tr>
          <td class="sub-head" style="padding-bottom: 0px;">
            <label for="dob">DD/MM/YYYY</label>
            <p class="body">
            <input type="text"
              id="dob"
              name="dob"
              value="12 October 1987"
              >
            </p>
          </td>

          <td class="sub-head" style="padding-bottom: 0px;">
            <label for="telephone">telephone</label>
            <p class="body">
            <input type="text"
              id="telephone"
              name="telephone"
              value="099-999-9999"
              >
            </p>
        </tr>

        <tr>
          <th class="head">Phone number</th>
          <td class="sub-head" style="padding-bottom: 0px;">
            <label for="relationship">relationship</label>
            <p class="body">
              <select id="relationships" name="relationships" style="font-size: 15px; ">
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
          <td class="sub-head" style="padding-bottom: 0px;">
            <label for="telephone">TEL.XXX-XXX-XXXX</label>
            <p class="body">
            <input type="text"
              id="telephone"
              name="telephone"
              value="088-888-8888"
              >
            </p>
          </td>

        </tr>
      </table>

        <div class="edit-personal-info" style="margin-left: 85%;">
            <a href="./c_personal_info.php">
                <button type="submit" name="submit" class="button">Done</button>
                </a>
        </div>
      </div>
    </div>
</body>
</html>
