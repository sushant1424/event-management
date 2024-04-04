<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Login</title>
</head>
<body>
  <?php
  require_once "header.php";
  ?>
  <div class="main">
    <div class="container">
      <h1>Login to your account!</h1>
      <p class="signup_link">or <a href="signup.php">Create a new account</a></p>
      <form action="" method="post">
      
      <div class="txt-field">
        <input type="email" required>
        <span></span>
        <label for="email">Email</label>
      </div>
      <div class="txt-field">
        <input type="password" required>
        <span></span>
        <label for="password">Password</label>
      </div>
     <p class="forgot">Forgot your password?</p>
      <button>Login</button>
    
      </form>
    </div>
  </div>
  <?php
  require_once "footer.php";
  ?>
</body>
</html>