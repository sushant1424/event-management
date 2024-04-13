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
        <h4 class="mt-4">View Categories</h4>
        <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item active">Dashboard</li>
          <li class="breadcrumb-item">Categories</li>
        </ol>
      </div>
      <div class="row mt-4">
        <div class="col-md-12">
          <?php
          include('message.php');
          ?>
          <div class="card">
            <div class="card-header">
              <h4>View Categories
                <a href="add_category.php" class="btn btn-danger float-end">Add Category</a>
              </h4>
            </div>
            <div class="card-body">


              <div class="table-responsive">
                <table class="table table-bordered table-light table-hover" id="myTable">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Category Name</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>

                  </thead>
                  <tbody>
                    <?php
                    $category = "SELECT * FROM categories WHERE status!='2'";
                    $category_run = mysqli_query($conn, $category);

                    if (mysqli_num_rows($category_run) > 0) {
                      foreach ($category_run as $item) {
                    ?>
                        <tr>
                          <td><?= $item['c_id'] ?></td>
                          <td><?= $item['name'] ?></td>
                          <td>
                            <?php
                            if ($item['status'] == '1') {
                              echo 'Hidden';
                            } else {
                              echo 'Visible';
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
                                <li> <a href="edit_category.php?id=<?= $item['c_id'] ?>" class="btn btn-danger dropdown-item">Edit</a>
                                </li>
                                <li>
                                  <form action="alter_code.php" method="POST">
                                    <button type="submit" name="delete_category" value="<? $item['c_id'] ?>" class="btn btn-info dropdown-item">Delete</a>
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
  <?php
  include('footer.php');
  ?>
</body>

</html>