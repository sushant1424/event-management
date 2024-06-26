<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  



  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

  
  <link rel="stylesheet" href="styles/header.css">
  
  <!--alertify js-->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

  <!-- datatable with bootstrap -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />
  
   <!-- Summernote CSS - CDN Link -->
   <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <!-- //Summernote CSS - CDN Link -->

  
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

      




      


      

    </header>

</body>
</html>