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
  include('authentication.php');
  ?>
  <div class="grid-container">

    <!-- header -->
    <?php
     include('header.php');
    ?>
    <!-- end of header -->

    <!-- sidebar -->
    <?php
    include('sidebar.php');
    ?>
    <!-- end of sidebar -->

    <!-- main content -->
    <main class="main-container">

      <div class="main-title">
        <p>DASHBOARD</p>
      </div>

      <div class="main-cards">

        <div class="card">
          <div class="card-inner">
            <p >Total Categories</p>
            <span class="material-icons-outlined ">category</span>
          </div>
          <?php
          $dash_categories_query = "SELECT * FROM categories";
          $dash_categories_query_run = mysqli_query($conn, $dash_categories_query);
          if($categories_total = mysqli_num_rows($dash_categories_query_run))
          {
              echo '<div class="quantity">'.$categories_total.'</div>';
          }
          else{
                echo '<div class="quantity">No data</div>';
          }
          ?>
        </div>

        <div class="card">
          <div class="card-inner">
            <p >Total Events</p>
            <span class="material-icons-outlined text-blue">event</span>
          </div>
          <?php
          $dash_events_query = "SELECT * FROM events";
          $dash_events_query_run = mysqli_query($conn, $dash_events_query);
          if($events_total = mysqli_num_rows($dash_events_query_run))
          {
              echo '<div class="quantity">'.$events_total.'</div>';
          }
          else{
                echo '<div class="quantity">No data</div>';
          }
          ?>
        </div>

        <div class="card">
          <div class="card-inner">
            <p >Total reg. Users</p>
            <span class="material-icons-outlined text-blue">people</span>
          </div>
          <?php
          $dash_reg_users_query = "SELECT * FROM new_users";
          $dash_reg_users_query_run = mysqli_query($conn, $dash_reg_users_query);
          if($reg_users_total = mysqli_num_rows($dash_reg_users_query_run))
          {
              echo '<div class="quantity">'.$reg_users_total.'</div>';
          }
          else{
                echo '<div class="quantity">No data</div>';
          }
          ?>
          
        </div>

        <div class="card">
          <div class="card-inner">
            <p >Total Bookings</p>
            <span class="material-icons-outlined text-blue">content_paste</span>
          </div>
          <div class="quantity"></div>
        </div>

        <div class="card">
          <div class="card-inner">
            <p >New Booking</p>
            <span class="material-icons-outlined ">content_paste</span>
          </div>
          <div class="quantity"></div>
        </div>

        <div class="card">
          <div class="card-inner">
            <p >Confirmed Bookings</p>
            <span class="material-icons-outlined ">content_paste</span>
          </div>
          <div class="quantity"></div>
        </div>
        
        <div class="card">
          <div class="card-inner">
            <p >Cancelled Bookings</p>
            <span class="material-icons-outlined ">content_paste</span>
          </div>
          <div class="quantity"></div>
        </div>
      </div>
    </main>
    <!-- end of main -->
  </div>
  <script src="../js/script.js"></script>
  <?php
include('footer.php');
?>
</body>
</html>