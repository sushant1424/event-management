<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/signup.css">
  <link rel="stylesheet" href="../styles/header.css">
  <meta name="google-signin-client_id" content="304257579480-5ha1je5c6s4kjal2t4no3pjrurvse97d.apps.googleusercontent.com">
  
  <title>Sign Up</title>
</head>
<body>
  
  <?php
  session_start();
  if(isset($_SESSION['auth']))
  {
      $_SESSION['message'] = "You already are in";
      header("Location: index.php");
      exit(0);
  }
  require_once "header.php";
  ?>
  <div class="main">
    <div class="container">
      <h1>Sign up for an account!</h1>
      <p class="login_link">or <a href="login.php">Sign in to your existing account</a></p>
      <?php
      include('message.php'); 
      ?>
      <form action="user-registration.php" method="post">
      <div class="txt-field">
        <input type="text" name="username" required>
        <span></span>
        <label for="username">Username</label>
      </div>
      <div class="txt-field">
        <input type="tel" name="phone" required>
        <span></span>
        <label for="phone">Phone</label>
      </div>
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
      <div class="txt-field">
        <input type="password" name="confirm_password" required>
        <span></span>
        <label for="confirm_password">Confirm Password</label>
      </div>
      
      <button name="signup_button">Sign Up</button>
    
      </form>
      <script src="https://apis.google.com/js/platform.js" async defer></script>
      <div class="g-signin2" data-onsuccess="onSignIn"></div>
    </div>
  </div>
  <?php
  require_once "footer.php";
  ?>
</body>
</html>