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
        <span class="material-icons-outlined">dashboard</span><a href="index.php" class="text-decoration none">Dashboard</a>
        </li>
        <li class="sidebar-list-items">
        <span class="material-icons-outlined">category</span>Categories
        </li>
        <li class="sidebar-list-items">
        <span class="material-icons-outlined">event</span>Events
        </li>
        <li class="sidebar-list-items">
        <span class="material-icons-outlined">people</span><a href="view_users.php">Users</a>
        </li>
        <li class="sidebar-list-items">
        <span class="material-icons-outlined">content_paste</span>Bookings
        </li>
        <li class="sidebar-list-items">
        <span class="material-icons-outlined">summarize</span>Report
        </li>
      </ul>
      <script src="js/script.js"></script>

    </aside>

</body>
</html>