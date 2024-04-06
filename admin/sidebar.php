<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/sidebar.css">
  <title>Document</title>
</head>
<body>
<aside id="sidebar">
      <div class="sidebar-title" onclick="closeSidebar()">
        
        <span class="material-icons-outlined">close</span>
      </div>

      <ul class="sidebar-list ">
        <li class="sidebar-list-items ">
        <a href="index.php" class="text-decoration-none text-white"><span class="material-icons-outlined">dashboard</span> <div class="d-inline p-2">Dashboard</div></a>
        </li>
        <li class="sidebar-list-items">
        <a href="view_category.php" class="text-decoration-none text-white"><span class="material-icons-outlined ">category</span> <div class="d-inline p-2">Categories</div></a>
        
        </li>
        <li class="sidebar-list-items">
        <a href="events.php" class="text-decoration-none text-white"><span class="material-icons-outlined">event</span> <div class="d-inline p-2">Events</div></a>
        </li>
        <li class="sidebar-list-items">
        <a href="view_users.php" class="text-decoration-none text-white"><span class="material-icons-outlined">people</span> <div class="d-inline p-2">Users</div></a>
        </li>
        <li class="sidebar-list-items">
        <a href="bookings.php" class=" text-decoration-none text-white"><span class="material-icons-outlined">content_paste</span> <div class="d-inline p-2">Bookings</div></a>
        </li>
        <li class="sidebar-list-items">
        <a href="report.php" class="text-decoration-none text-white"><span class="material-icons-outlined">summarize</span> <div class="d-inline p-2">Report</div></a>
        </li>
      </ul>
      <script src="scripts/script.js"></script>

    </aside>

</body>
</html>