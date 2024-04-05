<?php
include("authentication.php");

if(isset($_POST['delete_user']))
{
  $user_id = $_POST['delete_user'];
  $query = "DELETE FROM new_users WHERE u_id = '$user_id'";
  $query_run = mysqli_query($conn, $query);
  if($query_run)
  {
    $_SESSION['message'] = "Deleted Successfully";
    header("Location: view_users.php");
    exit(0);
  }
  else
  {
    $_SESSION['message'] = "Couldnot add user/admin";
    header("Location: view_users.php");
    exit(0);
  }

}

if(isset($_POST['add_user']))
{
  $username = $_POST['username'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $role_as = $_POST['role_as'];
  $status = $_POST['status'] == true ? '1':'0';

  $query = "INSERT INTO new_users(username,phone,email,password,role_as,status) values('$username','$phone','$email','$password','$role_as','$status')";

  $query_run = mysqli_query($conn, $query);
  if($query_run)
  {
    $_SESSION['message'] = "Added Successfully";
    header("Location: view_users.php");
    exit(0);
  }
  else
  {
    $_SESSION['message'] = "Couldnot add user/admin";
    header("Location: view_users.php");
    exit(0);
  }
  
}

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