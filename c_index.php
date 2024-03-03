<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online hotel management system</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- Login Page -->
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

    <form action="c_login_db.php" method="POST">
      <div class="login-form">
        <div class="fill-info">
          <h1>Login</h1>
          <label for="email"><b>Email</b></label>
          <input
            type="email"
            id="email"
            name="email"
            placeholder="John.Smith@gmail.com"
            required
          />

          <label for="password"><b>Password</b></label>
          <input type="password" id="password" name="password" placeholder="xxxxxxxx" required />

          <button type="submit" name="submit" class="button">Login</button>

          <p class="account">
            Don't have an account? <a href="./c_signup.php"> Sign up</a>
          </p>
        </div>
      </div>
    </form>
  </body>
</html>