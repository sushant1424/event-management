<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "user_registration";

$con = mysqli_connect("$host","$username","$password","$database");

if(!$con)
{
  header("Location: ../errors/dberror.php");
  die();
}

?>