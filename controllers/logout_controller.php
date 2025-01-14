<?php

session_destroy();

if(!$_SESSION['email']){
  header ('location: ../index.php');
}


?>