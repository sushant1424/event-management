<?php
include("authentication.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/view_users.css">
 
  <title>View Users</title>
</head>
<body>
  <div class="grid-container">
  <?php
  include("header.php");
  include("sidebar.php");
  ?>

  <main class="main-container">
    <div class="users_container">
    <div class="container-fluid px-4">
      <h4 class="mt-4">Users</h4>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">Users</li>
      </ol>
    </div>

  <div class="row">
    <div class="col-md-12">
      <?php
      include('message.php');
      ?>
      <div class="card">
        <div class="card-header">
            <h4>Registered Users
              <a href="add_user.php" class="btn btn-primary float-end">Add Admin/User</a>
            </h4>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>User ID</th>
                <th>Username</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Roles</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $query = "SELECT * from new_users";
              $query_run = mysqli_query($conn, $query);

              if(mysqli_num_rows( $query_run ) > 0) {
                  foreach($query_run as $row){
                    ?>
                    <tr>
                        <td><?= $row['u_id']?></td>
                        <td><?= $row['username']?></td>
                        <td><?= $row['phone']?></td>
                        <td><?=$row['email']?></td>
                        <td>
                          <?php
                          if($row['role_as'] == "1"){
                            echo 'Admin';
                          }
                          else{
                            echo 'User';
                          }
                          ?>
                        </td>
                        <td><a href="edit_user.php?id=<?= $row['u_id'];?>" class="btn btn-danger">Edit</a></td>
                        <td>
                          <form action="alter_code.php" method="POST">
                          <button type="submit" name="delete_user" value="<?=$row['u_id'];?>" class="btn btn-success">Delete</button>
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
                  <td colspan="6">No record found</td>
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