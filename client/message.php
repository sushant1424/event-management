<?php
if(isset($_SESSION['message'])) //checking if message variable of session is set or not
{
  ?>
  <div class="alert alert-sucess"><?= $_SESSION['message'] ?></div>
   <!-- ecohing the message content in h4-->
   <?php unset($_SESSION['message']); ?>

  <?php
}
?>