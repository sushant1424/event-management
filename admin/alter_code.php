<?php
include("authentication.php");
 
//---------delete users-----------------//
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
    $_SESSION['message'] = "Couldnot delete user/admin";
    header("Location: view_users.php");
    exit(0);
  }

}






//-----------add users-------------//
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

//-------------update users-----------//
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

//--------save category----------//

if(isset($_POST['add_category'])){

  $name = $_POST['cname'];
  $slug = $_POST['slug'];
  $description = $_POST['description'];
  $meta_title = $_POST['meta_title'];
  $meta_description = $_POST['meta_description'];
  $meta_keyword = $_POST['meta_keyword'];
  $navbar_status = $_POST['navbar_status'] == true ? '1':'0';
  $status = $_POST['status'] == true ? '1' : '0';

  $query = "INSERT INTO categories(name,slug,description,meta_title,meta_description,meta_keyword,navbar_status,status) values('$name','$slug',' $description','$meta_title','$meta_description','$meta_keyword',' $navbar_status','$status')";

  $query_run = mysqli_query($conn,$query);
  if($query_run)
  {
    $_SESSION['message'] = "Category Added Successfully";
    header("Location: add_category.php");
    exit(0);
  }
  else{
    $_SESSION['message'] = "Category  Addition Failed!";
    header("Location: add_category.php");
    exit(0);
  }

}

//-------update category-------//

if(isset($_POST['update_category']))
{
  $category_id = $_POST['category_id'];
  $name = $_POST['cname'];
  $slug = $_POST['slug'];
  $description = $_POST['description'];
  $meta_title = $_POST['meta_title'];
  $meta_description = $_POST['meta_description'];
  $meta_keyword = $_POST['meta_keyword'];
  $navbar_status = $_POST['navbar_status'] == true ? '1':'0';
  $status = $_POST['status'] == true ? '1' : '0';

  $query = "UPDATE categories SET name = '$name', slug = '$slug', description = '$description' , meta_title = '$meta_title' , meta_description = '$meta_description', meta_keyword = '$meta_keyword' ,navbar_status = '$navbar_status' ,
  status = '$status' where c_id = '$category_id'";

  $query_run = mysqli_query($conn, $query);
  if($query_run)
  {
    $_SESSION['message'] = "Updated Successfully";
    header("Location: view_category.php");
    exit(0);
  }
  else
  {
    $_SESSION['message'] = "Update Failed";
    header("Location: view_category.php");
    exit(0);
  }
  }

  //---------delete category------------//

  if(isset($_POST['delete_category']))
{
  $category_id = $_POST['delete_category'];
  //2==delete
  $query = "UPDATE categories SET status ='2' where c_id = '$category_id' LIMIT 1";
  $query_run = mysqli_query($conn, $query);
  if($query_run)
  {
    $_SESSION['message'] = "Deleted Successfully";
    header("Location: view_category.php");
    exit(0);
  }
  else
  {
    $_SESSION['message'] = "Couldnot delete";
    header("Location: view_category.php");
    exit(0);
  }

}

//------------------add events-----------//
if(isset($_POST['add_events'])){

  $category_id = $_POST['category_id'];
  $name = $_POST['name'];
  $slug = $_POST['slug'];
  $description = $_POST['description'];

  //getting file name
  $image= $_FILES['image']['name'];
  //rename this image
  //getting extension info of path
  $image_extension = pathinfo($image, PATHINFO_EXTENSION);
  //giving unique name to filename by appending current timestamp();
  $filename = time().'.'.$image_extension;
  $meta_title = $_POST['meta_title'];
  $meta_description = $_POST['meta_description'];
  $meta_keyword = $_POST['meta_keyword'];
  $status = $_POST['status'] == true ? '1' : '0';

  $query = "INSERT INTO events(c_id,name,slug,description,image,meta_title,meta_description,meta_keyword,status) values('$category_id','$name','$slug',' $description','$filename','$meta_title','$meta_description','$meta_keyword','$status')";

  $query_run = mysqli_query($conn,$query);
  if($query_run)
  {
    move_uploaded_file($_FILES['image']['tmp_name'],'../images/'.$filename);
    $_SESSION['message'] = "Event Added Successfully";
    header("Location: view_events.php");
    exit(0);
  }
  else{
    $_SESSION['message'] = "Event  Addition Failed!";
    header("Location: view_events.php");
    exit(0);
  }

}

//--------update events-------------//
if(isset($_POST['update_events']))
{
  $category_id = $_POST['category_id'];

  $events_id = $_POST['events_id'];
  $name = $_POST['name'];
  $slug = $_POST['slug'];
  $description = $_POST['description'];
  $old_filename = $_POST['old_image'];
  $image= $_FILES['image']['name'];
  $update_filename = '';
  if($image!=NULL)
  {
    $image_extension = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time().'.'.$image_extension;
    $update_filename = $filename;
  }
  else
  {
    $update_filename = $old_filename;
  }
  
 
  $meta_title = $_POST['meta_title'];
  $meta_description = $_POST['meta_description'];
  $meta_keyword = $_POST['meta_keyword'];
  $status = $_POST['status'] == true ? '1' : '0';

  
  $query = "UPDATE events SET c_id = '$category_id',name = '$name', slug = '$slug', description = '$description' ,image='$update_filename', meta_title = '$meta_title' , meta_description = '$meta_description', meta_keyword = '$meta_keyword' , status = '$status' where e_id = '$events_id'";

  $query_run = mysqli_query($conn, $query);
  if($query_run)
  {
    if($image!=NULL)
    {
      if(file_exists('../images/'.$old_filename)){
        unlink("../images/".$old_filename);
      
      move_uploaded_file($_FILES['image']['tmp_name'],'../images/'.$update_filename);
      }
    }
    $_SESSION['message'] = "Event Updated Successfully";
    header('Location: view_events.php?id= '.$events_id);
    exit(0);
  }
  else{
    $_SESSION['message'] = "Event Updation Failed!";
    header('Location: view_events.php'.$events_id);
    exit(0);
  }
  }
  //---------------delete events------------------//
if(isset($_POST['delete_events']))
{
  $events_id = $_POST['delete_events'];

  $query = "DELETE FROM events where e_id = '$events_id' limit 1";
  $query_run = mysqli_query($conn, $query);

  $check_img_query = "SELECT * FROM events where e_id = '$events_id' limit 1";
  $img_res = mysqli_query($conn, $check_img_query);
  $res_data = mysqli_fetch_all( $img_res );
  $image = $res_data['image'];

  if($query_run){
    if(file_exists('../images/'.$image)){
      unlink("../images/".$image);
    }
    $_SESSION['message'] = 'Event Deleted Successfully';
    header('Location:view_events.php');
    exit(0);
  }
  else
  {
    $_SESSION['message'] = 'Event Deletion Failed';
    header('Location:view_events.php');
    exit(0);
  }
}




  
  


  

?>