<?php
include('authentication.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/main.css">
 
  <title>Edit Users</title>
</head>
<body>
  <div class="grid-container">
  <?php
  include("header.php");
  include("sidebar.php");
  ?>

  <main class="main-container">
    <div class="container-fluid px-4">
      <h4 class="mt-4">Users</h4>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">Users</li>
      </ol>
    </div>

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
            <h4>Edit Users</h4>
        </div>
        <div class="card-body">
             <?php

             if(isset($_GET['id'])){
              $u_id = $_GET['id'];
              
             
             $users = "SELECT * FROM new_users where u_id ='$u_id'";
             $users_run = mysqli_query($conn, $users);

             if(mysqli_num_rows($users_run) > 0){
              foreach( $users_run as $user ){
                
                ?>
                
              <form action="alter_code.php" method="POST">
                <input type="hidden" name="user_id "value="<?=$user['u_id'];?>">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="">Username</label>
                    <input type="text" name="username" value="<?=$user['username'];?>" class="form-control">
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="">Phone</label>
                    <input type="tel" name="phone" class="form-control"  value="<?=$user['phone'];?>">
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control"  value="<?=$user['email'];?>">
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" >
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="">Role as</label>
                    <select name="role_as" required class="form-control">
                      <option value="">Select Role</option>
                      <option value="admin"  <?= $user['role_as'] == '1' ? 'selected':''?>>Admin</option>
                      <option value="user" <?= $user['role_as'] == '0' ? 'selected':''?>>User</option>
                    </select>
                  </div>
                  <div class="col-md-6 mb-3">
                      <label for="">Status</label>
                      <input type="checkbox" name="status" width="70px" height="70px"
                      <?= $user['status'] == '1' ? 'checked':''?>/>
                  </div>
                  <div class="col-md-12 mb-3">
                  <button type="submit" class="btn btn-primary" name="update_user">Update</button>

                  </div>
                </div>
              </form>
              <?php
             }}
             else
             {
              ?>
              <h4>No record Found</h4>
              <?php
             }
             }
             ?>
        </div>
      </div>
    </div>
  </div>
</main>

 
</div>
<?php
include('footer.php');
?>
</body>
</html>