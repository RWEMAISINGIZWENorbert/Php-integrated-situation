<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./styles/index.css">
</head>
<body>
   <div class="login-section"> 
      <div class="inner-section">    
      <?php
      if(isset($_GET['msg'])){
           echo "<p>". $_GET['msg']."</p>";
      }     
     ?>
      <h2>Login</h2>
      <form action="login_validation.php" method = 'POST'>
         <label for="email">Email Adress</label><br>
         <input type="text" name="email"> <br><br>
         <label for="">Password</label><br>
         <input type="password" name="password"><br>
         <input type="submit" value="Login">

         <div class="credentials">
           <div class="credential1">New user? <a href="create_account.php">create account here</a><br> <br>
            Order the product <a href="order_product.php">order</a>
            </div>
         </div>
      </form>
      </div>
      </div>
</body>
</html>