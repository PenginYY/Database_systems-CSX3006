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

    <div class="login-form">
      <div class="fill-info">
        <h1>Login</h1>
        <label for="email"><b>Email</b></label>
        <input
          type="email"
          id="email"
          placeholder="John.Smith@gmail.com"
          required
        />

        <label for="password"><b>Password</b></label>
        <input type="password" id="password" placeholder="xxxxxxxx" required />

        <a href="./personal_info.php">
          <button type="submit" name="submit" class="button">Login</button>
        </a>

        <p class="account">
          Don't have an account? <a href="./signup.php"> Sign up</a>
        </p>
      </div>
    </div>
  </body>
</html>
