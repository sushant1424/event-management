<?php
include('../admin/config/dbconnect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/header.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gilda+Display&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

<!--alertify js-->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>


  <title>Header</title>
</head>
<body>
  <header>

    <div class="header-left">
    <a href="index.php"><img src="../images/logo.png" alt="upscale-logo" ></a>
    </div>


    <div class="header-right">
    <nav>
    <a href="about.php"><h4>About</h4></a>
    <a href="services.php"><h4>Services</h4></a>
    <a href="category.php"><h4>Events</h4></a>
    <a href="contact.php"><h4>Contact</h4></a>
</nav>

<?php if(isset($_SESSION['auth_user'])) : ?>
  <div class="dropdown">
  <a href=""><h4>Hello! <?= $_SESSION['auth_user']['user_name']?></h4>
  <div class="dropdown-content">
    
    <a href="logout.php">My Profile</a>
    <form action="allcode.php" method="POST">
        <button type="submit" name="logout_button" class="logout_button">Log Out</button>
    </form>
    
    
 
  </div>
</div>


    <?php else :?>
    
    <a href="signup.php"><button class="signup_button">Get Started</button></a>
    <?php endif; ?>
  <i class="ri-menu-line"></i>
    </div>


    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
      <script>
        <?php
        if(isset($_SESSION['message'])){
          ?>
          alertify.set('notifier','position', 'top-center');
          alertify.success('<?=  $_SESSION["message"]?>');
        <?php
        }
        unset($_SESSION['message']);
        ?>
         
      </script>
  </header>
</body>
</html>