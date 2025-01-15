<?php
// include 'session.php';
include 'admindashboard.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/index.css">
</head>
<body>
    <div class="admin-section">
        <h2>Add New Product</h2>
      <form action="insert_product.php" method="POST">
           <label for="">Product name</label>
           <input type="text" name="productName"><br><br>
           <label for="">Product Quantity</label>
           <input type="number" name="productQuanity"> <br><br>
           <label for="">Poduct Unity Price</label>
           <input type="number" name="unityPrice"><br> <br>
           <?php
       if(isset($_GET['msg'])){
        echo "<p class = 'msg'>*". $_GET['msg']."*</p>";
       }
    ?>
           <div class="add">
           <input type="submit" value="Add Product" class = "admin-submit">
           </div>
      </form>
      </div>
</body>
</html>