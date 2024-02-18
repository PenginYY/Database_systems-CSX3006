<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign up Page</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- Sign up page -->
    <div class="navbar">
      <nav class="navbar-container">
        <a href="#"
          ><img src="./logo/Assumption_University(logo).png" alt="logo"
        /></a>
        <ul class="navbar-login">
          <li>
            <a href="#"><h1>online hotel management system</h1></a>
          </li>
        </ul>
      </nav>
    </div>

    <form action="connect.php" method="POST">
      <div class="signup-form">
        <div class="fill-info">
          <h1>Sign up</h1><br>
          <label for="email"><b>Email</b></label>
          <input
            type="email"
            id="email"
            name="email"
            placeholder="John.Smith@gmail.com"
            required
          />

          <label for="password"><b>Password</b></label>
          <input
            type="password"
            id="password"
            name="password"
            placeholder="12345"
            required
          />

          <label for="name"><b>Name</b></label>
          <input
            type="text"
            id="name"
            name="name"
            placeholder="John"
            required
          />

          <label for="surname"><b>Surname</b></label>
          <input
            type="text"
            id="surname"
            name="surname"
            placeholder="Smith"
            required
          />

          <label for="address"><b>Address</b></label>
          <input
            type="text"
            id="address"
            name="address"
            placeholder="Robert Robertson, 1234 NW Bobcat Lane, St. Robert, MO 65584-5678"
          />

          <a href="index.php"><input type="submit" name="submit" class="button" value="Sign up"/></a>
          <p class="account">
            Already have an account? <a href="c_index.php">Login</a>
          </p>
        </div>
      </div>
    </form>
  </body>
</html>
