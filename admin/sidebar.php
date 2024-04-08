<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/sidebar.css">
  <title>Document</title>
</head>
<body>
  <?php
    $page =SUBSTR($_SERVER['SCRIPT_NAME'],strrpos($_SERVER['SCRIPT_NAME'],"/")+1);
    
  ?>
<aside id="sidebar">
      <div class="sidebar-title" onclick="closeSidebar()">
        
        <span class="material-icons-outlined">close</span>
      </div>

      <ul class="sidebar-list ">
      <a href="index.php" class="text-decoration-none text-white ">
        <li class="sidebar-list-items <?= $page == 'index.php' ? 'active bg-black ':''; ?>">
        <span class="material-icons-outlined">dashboard</span> <div class="d-inline ">Dashboard</div>
        </li></a>

        <a href="view_category.php" class="text-decoration-none text-white">
        <li class="sidebar-list-items <?= $page == 'view_category.php' ? 'active bg-black ':''; ?>">
        <span class="material-icons-outlined ">category</span> <div class="d-inline ">Categories</div>
        
        </li>
        </a>

        <a href="view_events.php" class="text-decoration-none text-white">
        <li class="sidebar-list-items <?= $page == 'view_events.php' ? 'active bg-black ':''; ?>">
        <span class="material-icons-outlined">event</span> <div class="d-inline ">Events</div>
        </li>
        </a>

        <a href="view_users.php" class="text-decoration-none text-white">
        <li class="sidebar-list-items <?= $page == 'view_users.php' ? 'active bg-black ':''; ?>">
        <span class="material-icons-outlined">people</span> <div class="d-inline ">Users</div>
        </li>
        </a>

        <a href="bookings.php" class=" text-decoration-none text-white">
        <li class="sidebar-list-items <?= $page == 'bookings.php' ? 'active bg-black ':''; ?>">
        <span class="material-icons-outlined">content_paste</span> <div class="d-inline ">Bookings</div>
        </li>
        </a>

        <a href="report.php" class="text-decoration-none text-white">
        <li class="sidebar-list-items <?= $page == 'report.php' ? 'active bg-black ':''; ?>">
        <span class="material-icons-outlined">summarize</span> <div class="d-inline ">Report</div>
        </li>
        </a>

        <li class="sidebar-list-items">
          
        <a href="../client/login.php" class="text-decoration-none text-white"><span class="material-icons-outlined">people</span> <div class="d-inline p-2">Log Out</div></a>
        </li>
      </ul>
      <script src="scripts/script.js"></script>

    </aside>

</body>
</html>