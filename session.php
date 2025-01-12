<?php

 session_start();

//  echo "You have logged in as:". $_SESSION['username'];


 if(!isset($_SESSION['email'])){
    header("Location:index.php");
 }

?>