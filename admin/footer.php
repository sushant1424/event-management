<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




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

<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="scripts/script.js"></script>



</body>
</html>