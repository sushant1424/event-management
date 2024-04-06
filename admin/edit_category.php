<?php
include('authentication.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/edit_category.css">
  <title>Document</title>
</head>

<body>
  <div class="grid-container">
    <?php
    include('header.php');
    include('sidebar.php');
    ?>
    <main class="main-container">


      <div class="row">
        <div class="col-md-12">
          <?php
          include('message.php');
          ?>
          <div class="card">
            <div class="card-header">
              <h4>Edit Categories
                <a href="view_category.php" class="btn btn-danger float-end">Back</a>
              </h4>
            </div>
            <div class="card-body">

              <?php
              if (isset($_GET['id'])) {
                $category_id = $_GET['id'];
                $edit_category = "SELECT * from categories where c_id='$category_id' LIMIT 1 ";
                $edit_category_run = mysqli_query($conn, $edit_category);

                if (mysqli_num_rows($edit_category_run) > 0) {
                  $row = mysqli_fetch_array($edit_category_run);
              ?>

                  <form action="alter_code.php" method="POST">
                    <input type="hidden" name="category_id" value="<?= $row['c_id']?>">
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <label for="">Category Name</label>
                        <input type="text" value="<?= $row['name']?>" name="cname" class="form-control">
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="">Slug (URL)</label>
                        <input type="text"  value="<?= $row['slug']?>" name="slug" class="form-control">
                      </div>
                      <div class="col-md-12 mb-3">
                        <label for="">Description</label>
                        <textarea name="description"  class="form-control" rows="4">
                        <?= $row['description']?>
                        </textarea>
                      </div>
                      <div class="col-md-12 mb-3">
                        <label for="">Meta Title</label>
                        <input type="text" value="<?= $row['meta_title']?>" name="meta_title" max="190" class="form-control">
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="">Meta Description</label>
                        <textarea name="meta_description" class="form-control" rows="4">
                        <?= $row['meta_description']?>
                        </textarea>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="">Meta Keyword</label>
                        <textarea name="meta_keyword" class="form-control" rows="4">
                        <?= $row['meta_keyword']?>
                        </textarea>
                      </div>


                      <div class="col-md-6 mb-3">
                        <label for="">Navbar Status</label>
                        <input type="checkbox" name="navbar_status" <?= $row['navbar_status'] == 1 ? 'checked':''?> width="70px" height="70px" />
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" name="status" <?= $row['status'] == 1 ? 'checked':''?> width="70px" height="70px" />
                      </div>
                      <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary" name="update_category">Save Category</button>
                      </div>
                    </div>
                  </form>

                <?php

                } else {
                ?>
                  <h4>No Record Found</h4>
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
</body>

</html>