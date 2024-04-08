<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/header.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <!-- Material icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!--alertify js-->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

  <title>header</title>
</head>
<body>

<header class="header">
      <div class="menu-icon" >
      <span class="material-icons-outlined" onclick="openSidebar()">menu</span>      
      </div>
      <div class="header-left">
      <img src="../images/logo.png" alt="upscale logo" width="200px">
      </div>
      <div class="header-right">
      <span class="material-icons-outlined">notifications</span>

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
      <span class="material-icons-outlined ">account_circle</span>

    <?php endif; ?>
  <i class="ri-menu-line"></i>
    </div>

      




      
      <script src="scripts/script.js"></script>

      <!-- alertify js -->
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