<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="./styles/index.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
  <style>
       .im{
            display: flex;
            flex-direction: column;
            width: 100%;
            justify-content: center;
            align-items: center;
            background: transparent;
            cursor: pointer;
       }
       .im img{
            width: 50%;
            border-radius: 50%;
            height: 6rem;
            width: 6rem;
       }
       .im p{
            background: transparent;
            margin-top: -3px;
       }
  </style>
<body>
<?php 
                session_start();
                if(isset($_SESSION['email'])){
             ?>
      <div class="side-bar">  
       <h6>Admin Dashboard</h6>
        <div class="im">
             <img src="./assets/avatarjpg.jpg" alt="">
             <?php echo "<p>". $_SESSION['email']. "</p>";?>
        </div>     
      <a href="view_product.php" class="active">View Products</a>     
      <a href="add_product.php">Add products</a>
      <a href="view_orders.php">View Orders</a>
      <!-- <a href=""class="logout">Logout</a> -->
       <a href="./controllers/logout_controller.php" class="logout">Logout</a>
      </div>
      </div>

      <?php
           }else{
            header("location: index.php");
           }
      ?>
</body>
</html>