<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/signup.css">
  <link rel="stylesheet" href="css/header.css">
  <meta name="google-signin-client_id" content="304257579480-5ha1je5c6s4kjal2t4no3pjrurvse97d.apps.googleusercontent.com">
  <title>Sign Up</title>
</head>
<body>
  
  <?php
  require_once "header.php";
  ?>
  <div class="main">
    <div class="container">
      <h1>Sign up for an account!</h1>
      <p class="login_link">or <a href="login.php">Sign in to your existing account</a></p>
      <form action="" method="post">
      <div class="txt-field">
        <input type="text" required>
        <span></span>
        <label for="username">Username</label>
      </div>
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
      <div class="txt-field">
        <input type="password" required>
        <span></span>
        <label for="confirm">Password Confirmation</label>
      </div>
      <button>Sign Up</button>
    
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