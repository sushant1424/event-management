<?php
include('authentication.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/main.css">
  <title>Document</title>
</head>
<body>
  <div class="grid-container">
    <?php
    include('header.php');
    include('sidebar.php');
    ?>
    <main class="main-container">
      
      <div class="container-fluid px-4">
      <h4 class="mt-4">View Events</h4>
        <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item active">Dashboard</li>
          <li class="breadcrumb-item">Events</li>
        </ol>
      </div>
    <div class="row mt-4">
      <div class="col-md-12">
        <?php
        include('message.php');
        ?>
        <div class="card">
          <div class="card-header">
              <h4>View Events
              <a href="add_events.php" class="btn btn-danger float-end">Add Events</a>
              </h4>
          </div>
          <div class="card-body">
            
                
          <div class="table-responsive">
            <table class="table table-bordered table-striped" id="myTable">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Event Name</th>
                  <th>Category</th>
                  <th>Image</th>
                  <th>Status</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>

              </thead>
              <tbody>
              <?php
            //$events = "SELECT * FROM events WHERE status!='2'";
            $events = "SELECT e.*,c.name AS c_name FROM events e,categories c WHERE c.c_id = e.c_id ";
            $events_run = mysqli_query($conn, $events);

            if(mysqli_num_rows($events_run) > 0)
            {
                foreach( $events_run as $item ){
                  ?>
                  <tr>
                  <td><?= $item['e_id']?></td>
                  <td><?= $item['name']?></td>
                  <td><?= $item['c_name']?></td>
                  <td><img src="../images/<?= $item['image']?>" alt="" width="60px" height="60px">
                  </td>
                  

                  <td>
                    <?php
                    if($item['status'] == '1')
                    {
                      echo 'Hidden';
                    }
                    else{
                      echo 'Visible';
                    }
                    ?>
                  </td>
                  <td>
                    <a href="edit_events.php?id=<?=$item['e_id'] ?>" class="btn btn-danger">Edit</a>
                  </td>
                  <td>
                    <form action="alter_code.php" method="POST">
                    <button type="submit" name="delete_events" value="<?$item['e_id']?>" class="btn btn-info">Delete</a>
                    </form>
                  </td>
                  </tr>
                  <?php
                }
                
              }
          
          else
          {
            ?>
            <tr>
              <td colspan="6">No record Found</td>
            </tr>
            <?php
          }
          ?>
              </tbody>

            </table>
          </div>
          </div>
    </div>
    </div>
  
    </div>
    </main>
  </div>
</body>
</html>