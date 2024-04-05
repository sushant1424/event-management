<?php
include("authentication.php");

if(isset($_POST['update_user']))
{
  $user_id = $_POST['u_id'];
  $username = $_POST['username'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $role_as = $_POST['role as'];
  $status = $_POST['status'] == true ? '1':'0';

  $query = "UPDATE new_users SET username = '$username', phone = '$phone', email = '$email' , password = '$password' , role_as = '$role_as', status = '$status' where u_id = '$user_id'";

  $query_run = mysqli_query($conn, $query);
  if($query_run)
  {
    $_SESSION['message'] = "Updated Successfully";
    header("Location: view_users.php");
    exit(0);
  }
  


}
?>