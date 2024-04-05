<?php
session_start();
require_once "../admin/config/dbconnect.php";

if(isset($_POST['signup_button']))
{
$username = mysqli_real_escape_string( $conn, $_POST["username"]); //escape the special characters that may ruin the query.
$phone =  mysqli_real_escape_string( $conn, $_POST["phone"]);
$email =  mysqli_real_escape_string( $conn, $_POST["email"]);
$password =  mysqli_real_escape_string( $conn, $_POST["password"]);
$confirm_password =  mysqli_real_escape_string( $conn, $_POST["confirm_password"]);

if($password == $confirm_password)
{
  //checking email
  $checkemail = "SELECT email from new_users WHERE email = '$email'";
  $checkemail_run =mysqli_query($conn, $checkemail);

  if(mysqli_num_rows($checkemail_run) > 0)
  {
    //Email already exists
    $_SESSION['message']="Email already exists";
    header("Location: signup.php");
    exit(0);

  }
  else
  {
    $insert_query = "INSERT INTO new_users (username,phone,email,password) VALUES ('$username','$phone','$email','$password')";
    $insert_query_run = mysqli_query($conn, $insert_query);
    if($insert_query_run){
      $_SESSION['message']="Signup Successful!";
      header("Location: login.php");
      exit(0);
    }
    else{
      $_SESSION['message']="Error Occured!";
      header("Location: signup.php");
      exit(0);
    }
  }

}
else
{
  $_SESSION['message']="Password is not matched";
  header("Location: signup.php");
  exit(0);
}
}

else{
  header("Location: signup.php");
  exit(0);
}
?>