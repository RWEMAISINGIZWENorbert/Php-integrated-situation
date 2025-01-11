<?php
include 'session.php';
include 'admindashboard.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <form action="insert_product.php" method="POST">
           <label for="">Product name</label>
           <input type="text" name="productName"> <br>
           <label for="">Product Quantity</label>
           <input type="number" name="productQuanity"> <br>
           <label for="">Poduct Unity Price</label>
           <input type="number" name="unityPrice"><br> <br>
           <input type="submit" value="Add Product">
      </form>
</body>
</html>