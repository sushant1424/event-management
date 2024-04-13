<?php
include("authentication.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <link rel="stylesheet" href="styles/main.css">




  </script>
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
              <table class="table table-bordered table-light table-hover " id="myTable">
                <thead>
                  <tr>
                    <th>User ID</th>
                    <th>Username</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Roles</th>
                    <th>Action</th>

                  </tr>
                </thead>
                <tbody>
                  <?php
                  $query = "SELECT * from new_users";
                  $query_run = mysqli_query($conn, $query);


                  if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $row) {
                  ?>
                      <tr>
                        <td><?= $row['u_id'] ?></td>
                        <td><?= $row['username'] ?></td>
                        <td><?= $row['phone'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td>
                          <?php
                          if ($row['role_as'] == "1") {
                            echo 'Admin';
                          } else {
                            echo 'User';
                          }
                          ?>
                        </td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-danger">Action</button>
                            <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                              <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu">
                              <li><a href="edit_user.php?id=<?= $row['u_id']; ?>" class="btn btn-danger dropdown-item ">Edit</a></li>
                              <li>
                                <form action="alter_code.php" method="POST">
                                  <button type="submit" class="dropdown-item btn btn-danger" value="<?= $row['u_id']; ?>" name="delete_user">Delete</button>
                                </form>
                              </li>
                          </div>
            </div>

            </td>







            </tr>
          <?php
                    }
                  } else {
          ?>
          <tr>
            <td colspan="6">No record found</td>
          </tr>
        <?php

                  }
        ?>
        </tbody>

        </table>
        <form action="export.php" method="POST">
          <button name="export_excel" class="btn btn-success mt-4"> Export to Excel</button>
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