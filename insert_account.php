<?php
 
 include 'db_connect.php';
 
 $email = $_POST['email'];
 $username = $_POST['username'];
 $password = $_POST['password'];

 if(empty(!$email) || empty(!$username) || empty(!$password)){
   header("location: create_accont.php?msg = Please fill the credentials");
 }

//  Insert in the database table
$insert = "INSERT INTO users(userName,email, Password) VALUES ('$username','$email','$password')";
$sql_command =  mysqli_query($conn, $insert);
 
 if($sql_command > 0){
    echo "<script>alert('Account Created succesfully')<script/>";
     header("location: index.php?msg= Account created succesfully");
 }else{
    echo "<script>alert('Failed')<script/>";
 }

?>