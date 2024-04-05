<?php
if(isset($_SESSION['message'])) //checking if message variable of session is set or not
{
  ?>
  <div style="
  background-color: #e63946;
  color:white;
  padding:0.8vw 0.8vw;
  text-align: center;
  "><?= $_SESSION['message'] ?></div>
   <!-- ecohing the message content in h4-->
   <?php unset($_SESSION['message']); ?>

  <?php
}
?>