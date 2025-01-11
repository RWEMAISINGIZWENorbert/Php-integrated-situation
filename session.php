<?php

 session_start();

 echo "You have logged in as:". $_SESSION['username'];


 if(!isset($_SESSION['username'])){
    header("Location:index.php");
 }

?>