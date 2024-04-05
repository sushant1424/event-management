<?php
session_start();
include('../admin/config/dbconnect.php');

if(isset($_POST['login_button']))
{
 $email = mysqli_real_escape_string($conn, $_POST['email']);
 $password = mysqli_real_escape_string($conn, $_POST['password']);

 $login_query = "SELECT * from new_users WHERE email='$email' and password = '$password' LIMIT 1";
 $login_query_run = mysqli_query($conn, $login_query);

 if(mysqli_num_rows($login_query_run) > 0)
 {
    foreach( $login_query_run as $data){
      $user_id = $data['id'];
      $user_name = $data['username'];
      $user_email = $data['email'];
      $role_as = $data['role_as'];
    
    }

    $_SESSION['auth'] = true;
    $_SESSION['auth_role'] = "$role_as"; // 1 = admin
    $_SESSION['auth_user'] = [
      'user_id' => $user_id,
      'user_name' => $user_name,
      'user_email' => $user_email,
    ];

    if($_SESSION['auth_role'] == '1'){ //admin logs in dashboard
      $_SESSION['message'] = "Welcome to dashboard";
      header("Location: ../admin/index.php");
      exit(0);
    }
    elseif($_SESSION['auth_role'] == '0') // normal users logs in 
    {
      $_SESSION['message'] = "You are logged in";
      header("Location: index.php");
      exit(0);
    }


 }
 else
 {
  $_SESSION['message'] = "Invalid Email or Password! Please try again.";
  header("Location: login.php");
  exit(0);
 }


}
else
{
  $_SESSION['message'] = "You are not able to enter";
  header("Location: login.php");
  exit(0);
}

?>