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
      
      
    <div class="row">
      <div class="col-md-12">
        <?php
        include('message.php');
        ?>
        <div class="card">
          <div class="card-header">
              <h4>Add Categories
              <a href="view_category.php" class="btn btn-danger float-end">Back</a>
              </h4>
          </div>
          <div class="card-body">
          <form action="alter_code.php" method="POST">
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="">Category Name</label>
                      <input type="text" name="cname"  class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="">Slug (URL)</label>
                      <input type="text" name="slug" class="form-control"  >
                    </div>
                    <div class="col-md-12 mb-3">
                      <label for="">Description</label>
                      <textarea name="description" class="form-control"  rows="4"></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                      <label for="">Meta Title</label>
                      <input type="text" name="meta_title" max="190" class="form-control" >
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="">Meta Description</label>
                      <textarea name="meta_description" class="form-control"  rows="4"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="">Meta Keyword</label>
                      <textarea name="meta_keyword" class="form-control"  rows="4"></textarea>
                    </div>

                    
                    <div class="col-md-6 mb-3">
                        <label for="">Navbar Status</label>
                        <input type="checkbox" name="navbar_status" width="70px" height="70px"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" name="status" width="70px" height="70px"/>
                    </div>
                    <div class="col-md-12 mb-3">
                    <button type="submit" class="btn btn-primary" name="add_category">Save Category</button>
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