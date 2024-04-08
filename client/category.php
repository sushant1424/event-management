  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/category.css">
    <title>Document</title>
  </head>

  <body>
    <?php
    include('events.php');
    ?>

    <div class="grid_container">

    <?php
          if(isset($_GET['category_title'])){
            $slug = mysqli_real_escape_string($conn, $_GET['category_title'] );
            $category = "SELECT c_id,slug from categories WHERE slug = '$slug' LIMIT 1";
            $category_run = mysqli_query($conn,$category);
            {
              if(mysqli_num_rows( $category_run ) > 0){
                $category_item = mysqli_fetch_array($category_run);
                $category_id = $category_item['c_id'];

                $event = "select c_id,name,slug,image,created_at FROM events where c_id = '$category_id'";
                $event_run = mysqli_query($conn,$event);

                if(mysqli_num_rows($event_run)>0)
                {
                  foreach($event_run as $event_item)
                  {
                    ?>

      <div class="card">
        <div class="card_header">
          <h3><?= $event_item['name']?></h3>
        </div>
        <div class="card_body">
          <img src="../images/<?=$event_item['image'];?>" alt="" width="100%" height="80px">
        </div>
        <div class="card_footer">
          <a href="">
            <p class="view_details">View Details</p>
          </a>
          <button>Get in</button>
        </div>
      </div>

      <?php
                  }
                }
                else
                {
                  ?>
                <h4>No Events Available</h4>
                <?php 
                }
              }
              else
              {
                ?>
                <h4>No Such Category</h4>
                <?php 
              }
            }
          }
          else
          {
            ?>
            <h4>No Such URL</h4>
            <?php 
          }
          ?>

      


        
    
    </div>
    
  </body>

  </html>