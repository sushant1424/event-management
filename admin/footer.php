<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


<!-- datatables -->
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<!-- Summernote JS - CDN Link -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    
<!-- //Summernote JS - CDN Link -->



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>




<!-- alertify js -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script>
  <?php
  if(isset($_SESSION['message'])){
    ?>
    alertify.set('notifier','position', 'top-right');
    alertify.success('<?=  $_SESSION["message"]?>');
  <?php
  }
  unset($_SESSION['message']);
  ?>
</script>


<!-- sweetalert2 -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

 <!-- custom js files -->
 <script src="scripts/script.js"></script>


</body>
</html>