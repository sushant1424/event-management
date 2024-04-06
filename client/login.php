<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/login.css">
  <link rel="stylesheet" href="../styles/style.css">
  

  <title>Login</title>
</head>
<body>
  <?php
  session_start();
  if(isset($_SESSION['auth']))
  {
      if(!isset($_SESSION['message'])){
        $_SESSION['message'] = "You are already logged in";
      }
      header("Location: index.php");
      exit(0);
  }
  require_once "header.php";
  ?>
  <div class="main">
     
    <div class="container">
      
      <h1>Login to your account!</h1>
      <p class="signup_link">or <a href="signup.php">Create a new account</a></p>
      <?php
      include('message.php'); 
      ?>
      <form action="person-login.php" method="post">
      <div class="txt-field">
        <input type="email" name="email" required>
        <span></span>
        <label for="email">Email</label>
      </div>
      <div class="txt-field">
        <input type="password" name="password" required>
        <span></span>
        <label for="password">Password</label>
      </div>
     <p class="forgot">Forgot your password?</p>
      <button name="login_button">Login</button>
    
      </form>
    </div>
  </div>
  <?php
  require_once "footer.php";
  ?>
</body>
</html>