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
              <h4>Add User/Admin
              <a href="view_users.php" class="btn btn-danger float-end">Back</a>
              </h4>
          </div>
          <div class="card-body">
          <form action="alter_code.php" method="POST">
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="">Username</label>
                      <input type="text" name="username"  class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="">Phone</label>
                      <input type="tel" name="phone" class="form-control"  >
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="">Email</label>
                      <input type="email" name="email" class="form-control"  >
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="">Password</label>
                      <input type="password" name="password" class="form-control" >
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="">Role as</label>
                      <select name="role_as" required class="form-control">
                        <option value="">Select Role</option>
                        <option value="admin"  >Admin</option>
                        <option value="user" >User</option>
                      </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" name="status" width="70px" height="70px"/>
                    </div>
                    <div class="col-md-12 mb-3">
                    <button type="submit" class="btn btn-primary" name="add_user">Add User/Admin</button>
                    </div>
                  </div>
                </form>
    
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