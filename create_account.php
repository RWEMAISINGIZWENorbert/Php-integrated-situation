<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/index.css">
</head>
<body>
<div class="login-section"> 
<div class="inner-section"> 
<div class="inner-section">    
      <?php
      if(isset($_GET['msg'])){
           echo "<p>". $_GET['msg']."</p>";
      }     
     ?>
      <h2>Create Account</h2>   
     <form action="insert_account.php" method="post">
        <label for="email">Email Adreess</label>
        <input type="text" name="email"><br>
        <label for="">Username</label>
        <input type="text" name="username"><br>
        <label for="">Password</label>
        <input type="password" name="password"><br>
        <input type="submit" value="Sign Up"><br>
        <div class="credentials">
            <div class="credential1">
            Already have an account? Login <a href="index.php">here</a>
            </div>
        </div>
     </form>
     </div>
     </div>
</body>
</html>