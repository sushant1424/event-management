<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <!-- Material icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

  <title>Admin Panel</title>
</head>

<body>
  <?php
  include('config/dbconnect.php');
  ?>
  <div class="grid-container">

    <!-- header -->
    <header class="header">
      <div class="menu-icon" >
      <span class="material-icons-outlined" onclick="openSidebar()">menu</span>      
      </div>
      <div class="header-left">
      <img src="../images/logo.png" alt="upscale logo" width="200px">
      </div>
      <div class="header-right">
      <span class="material-icons-outlined">notifications</span>
      <span class="material-icons-outlined">account_circle</span>
      </div>
    </header>
    <!-- end of header -->

    <!-- sidebar -->
    <aside id="sidebar">
      <div class="sidebar-title" onclick="closeSidebar()">
        
        <span class="material-icons-outlined">close</span>
      </div>

      <ul class="sidebar-list">
        <li class="sidebar-list-items">
        <span class="material-icons-outlined">dashboard</span>Dashboard
        </li>
        <li class="sidebar-list-items">
        <span class="material-icons-outlined">category</span>Category
        </li>
        <li class="sidebar-list-items">
        <span class="material-icons-outlined">event</span>Events
        </li>
        <li class="sidebar-list-items">
        <span class="material-icons-outlined">people</span>Users
        </li>
        <li class="sidebar-list-items">
        <span class="material-icons-outlined">content_paste</span>Bookings
        </li>
        <li class="sidebar-list-items">
        <span class="material-icons-outlined">summarize</span>Report
        </li>
      </ul>
    </aside>
    <!-- end of sidebar -->

    <!-- main content -->
    <main class="main-container">

      <div class="main-title">
        <p>DASHBOARD</p>
      </div>

      <div class="main-cards">

        <div class="card">
          <div class="card-inner">
            <p class="text-primary">Categories</p>
            <span class="material-icons-outlined text-blue">category</span>
          </div>
          <div class="quantity">7</div>
        </div>

        <div class="card">
          <div class="card-inner">
            <p class="text-primary">Total Events</p>
            <span class="material-icons-outlined text-blue">event</span>
          </div>
          <div class="quantity">7</div>
        </div>

        <div class="card">
          <div class="card-inner">
            <p class="text-primary">Total reg. Users</p>
            <span class="material-icons-outlined text-blue">people</span>
          </div>
          <div class="quantity">7</div>
        </div>

        <div class="card">
          <div class="card-inner">
            <p class="text-primary">Total Bookings</p>
            <span class="material-icons-outlined text-blue">content_paste</span>
          </div>
          <div class="quantity">7</div>
        </div>

        <div class="card">
          <div class="card-inner">
            <p class="text-primary">New Booking</p>
            <span class="material-icons-outlined text-blue">content_paste</span>
          </div>
          <div class="quantity">7</div>
        </div>

        <div class="card">
          <div class="card-inner">
            <p class="text-primary">Confirmed Bookings</p>
            <span class="material-icons-outlined text-blue">content_paste</span>
          </div>
          <div class="quantity">7</div>
        </div>
        
        <div class="card">
          <div class="card-inner">
            <p class="text-primary">Cancelled Bookings</p>
            <span class="material-icons-outlined text-blue">content_paste</span>
          </div>
          <div class="quantity">7</div>
        </div>
      </div>
    </main>
    <!-- end of main -->
  </div>
  <script src="js/script.js"></script>
</body>
</html>