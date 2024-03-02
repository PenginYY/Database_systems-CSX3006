<?php session_start(); ?>
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

    <?php
        $email = $_SESSION['email'];
        $sql = "SELECT * FROM `Account` WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        $row = mysqli_fetch_array($result);
    ?>

    <form action="./c_edit_personal_db.php" method="POST">
      <h1 class="title_customer">personal information</h1>
      <div class="account-info">
        <table>
          <tr>
            <th class="head">customer name</th>
            <th class="head">address</th>
          </tr>

          <tr>
            <td class="sub-head">
              <label for="name">Name</label>
              <p class="body">
              <input type="text"
              id="name"
              name="name"
              value=<?php echo $row['name']; ?>
              >
            </p>
          </td>
          
            <td class="sub-head">
            <label for="address">Address (City / State / Country)</label>
            <p class="body">
              <input
                style="width: 400px; height: 50px;"
                type="text"
                id="address"
                name="address"
                value=<?php echo $row['address']; ?>
              />
            </p>
            </td>
          </tr>

          <tr>
            <td class="sub-head">
                <label for="surname">surname</label>
                <p class="body">
                <input type="text"
                id="surname"
                name="surname"
                value=<?php echo $row['surname']; ?>
                >
                </p>
            </td>
            <th class="head">emergency call</th>
          </tr>

          <tr>
            <th class="head">date of birth</th>
            <td class="sub-head">
              <label for="name">name</label>
              <p class="body">
              <input type="text"
                id="name"
                name="rel-name"
                value="Esther Howard"
                >
              </p>
            </td>
          </tr>

          <tr>
            <td class="sub-head">
              <label for="birthday">DD/MM/YYYY</label>
              <p class="body">
              <input type="date" id="birthday" name="birthday">
              </p>
            </td>

            <td class="sub-head">
              <label for="phone">telephone</label>
              <p class="body">
              <input type="tel" id="phone" name="rel-phone" placeholder="099-999-9999" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
              </p>
          </tr>

          <tr>
            <th class="head">Phone number</th>
            <td class="sub-head">
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
            <td class="sub-head">
              <label for="telephone">TEL.XXX-XXX-XXXX</label>
              <p class="body">
              <input type="tel" id="phone" name="cus-phone" placeholder="099-999-9999" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
              </p>
            </td>

          </tr>
        </table>

          <div class="edit-personal-info">
            <button type="submit" name="submit" class="button">Done</button>
          </div>
        </div>
      </div>
    </form>
</body>
</html>
