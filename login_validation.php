<?php
  include 'db_connect.php';

 $email = $_POST['email'];
 $password  = $_POST['password'];

 if(empty($email) || empty($password)){
   header("location: index.php?msg=Please fill the credentials");
 }

 $sql_query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
 $sql_command = mysqli_query($conn, $sql_query);
 
 if($sql_command -> num_rows > 0){
    $result = mysqli_fetch_assoc($sql_command);
    session_start();
    $_SESSION['email'] = $email;
     if($_SESSION['email']){
      header("location: view_product.php");
     }else{
      header("location: index.php");
     }
 }else{
    header("location: index.php?msg=User name and Password does not match");
 }
 

?>