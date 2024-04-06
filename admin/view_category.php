<?php
include('authentication.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/view_category.css">
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
        
      </div>
    <div class="row mt-4">
      <div class="col-md-12">
        <?php
        include('message.php');
        ?>
        <div class="card">
          <div class="card-header">
              <h4>View Categories
              <a href="add_category.php" class="btn btn-danger float-end">Back</a>
              </h4>
          </div>
          <div class="card-body">
            
                
          <div class="table-responsive">
            <table class="table table-bordered table-stripe">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Category Name</th>
                  <th>Status</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>

              </thead>
              <tbody>
              <?php
            $category = "SELECT * FROM categories";
            $category_run = mysqli_query($conn, $category);

            if(mysqli_num_rows($category_run) > 0)
            {
                foreach( $category_run as $item ){
                  ?>
                  <tr>
                  <td><?= $item['c_id']?></td>
                  <td><?= $item['name']?></td>
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
                    <a href="" class="btn btn-danger">Edit</a>
                  </td>
                  <td>
                    <a href="" class="btn btn-info">Delete</a>
                  </td>
                  </tr>
                  <?php
                }
                
              }
          
          else
          {
            ?>
            <tr>
              <td colspan="5">No record Found</td>
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