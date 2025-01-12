<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="./styles/index.css">
</head>
<body>
<div class="login-section"> 
<div class="inner-section"> 
<div class="inner-section">    
      <?php
      if(isset($_GET['msg'])){
           echo "<p class='error'>". $_GET['msg']."</p>";
      }     
     ?>
      <h2>Create Account</h2>   
      <form action="./controllers/insert_account_controller.php" method="POST">
        <label for="email">Email Address</label>
        <input type="text" name="email"><br><br>
        <label for="username">Username</label>
        <input type="text" name="name"><br><br>
        <label for="password">Password</label>
        <input type="password" name="password"><br>
        <input type="submit" name="submit" value="Sign Up"><br>
        <div class="credentials">
            <div class="credential1">
            Already have an account? Login <a href="index.php">here</a>
            </div>
        </div>
     </form>
     </div>
     </div>
</div>
</body>
</html>