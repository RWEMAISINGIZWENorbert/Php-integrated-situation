<?php
 
 include 'db_connect.php';
 
 $email = $_POST['email'];
 $username = $_POST['username'];
 $password = $_POST['password'];

//  if(empty($email) || empty($username) || empty($password)){
//    header("location: create_account.php?msg=Please fill the credentials");
//  }
  
 //Check 
 $check_sql = "SELECT * FROM users WHERE email = '$email'";
 $check_result = $conn->query($check_sql);
   
 if($check_result -> num_rows > 0){
     header('location: create_account.php?msg=Email already exists');
 }

//  Insert in the database table

$insert = "INSERT INTO users(userName,email, Password) VALUES ('$username','$email','$password')";
$sql_command =  mysqli_query($conn, $insert);
 
 if($sql_command > 0){
    echo "<script>alert('Account Created succesfully')<script/>";
     header("location: ../index.php");
 }else{
    echo "<script>alert('Failed')<script/>";
 }

?>