<?php

session_start();
include('config/dbconnect.php');

if(!isset($_SESSION['auth']))
{
  $_SESSION['message'] = "Login to Access Dashboard";
  header("Location: ../client/login.php");
  exit(0);
}
else
{
  if($_SESSION['auth_role']!="1")
  {
    $_SESSION['message'] = "You are not allowed as admin";
    header("Location: ../client/login.php");
    exit(0);
  }
}

?>