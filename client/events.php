
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Categories</title>
  <link rel="stylesheet" href="../styles/events.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
</head>
<body>
  <?php
  session_start();
  include('header.php');
  ?>
  
  <div class="events_container">
    <div class="categories">
      <?php
      $categories_list = "SELECT * FROM categories where navbar_status = '0' and status='0'";
      $categories_list_run = mysqli_query($conn, $categories_list);

      if(mysqli_num_rows($categories_list_run)> 0)
      {
        foreach($categories_list_run as $category_item)
        {
          ?>
          <li>
            <a href="category.php?category_title=<?= $category_item['slug'];?>"><?= $category_item['name'];?></a>
          </li>
          <?php
        }

      }
      else
      {

      }
      ?>
    </div>
  </div>






  
</body>
</html>