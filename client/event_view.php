<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
  <?php
  include('header.php');
  ?>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
        <?php
          if(isset($_GET['event_title']))
          {
            $slug = mysqli_real_escape_string($conn, $_GET['event_title'] );
            $event = "select * FROM events where slug = '$slug'";
            $event_run = mysqli_query($conn,$event);
           
                if(mysqli_num_rows($event_run)>0)
                {
                  foreach($event_run as $event_item)
                  {
                    ?>
                    <div class="card  ">
                      <div class="card-header">
                      <h5 class="fs-3"><?=$event_item['name'];?></h5>
                      </div>
                      <div class="card-body">
                        <img src="../images/<?= $event_item['image'];?>" class=" img-fluid" alt="<?=$event_item['name'];?>">
                        <div class="mt-4 fs-6">
                        <?=$event_item['description'];?>
                        </div>
                      </div>
                      
                    </div>

      

      <?php
                  }
                
              }
              else
              {
                ?>
                <h4>No Such Event</h4>
                <?php 
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
        <div class="col-md-3">
          <div class="card">
            <div class="card-header">
              <h4>Interested?</h4>
            </div>
            <div class="card-body">
               <h4 class="fs-5">Register Today</h4>
               <button class="btn btn-success mt-4">Register</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
include('footer.php');
?>
</body>
</html>