<?php
 include 'db_connect.php';
 include 'admindashboard.php';

$productCode = $_GET['productCode'];

$sql_command = mysqli_query($conn, "SELECT * FROM products WHERE productCode = '$productCode'");
//   while($row = mysqli_fetch_assoc($sql_command)){
while($row = $sql_command -> fetch_assoc()){

?>

<!DOCTYPE html>
<html lang="en">
      <style>
             form{
                   margin-left: 7rem;
                   margin-top: 10rem;
             }
      </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update product</title>
    <link rel="stylesheet" href="./styles/index.css">
</head>
<body>
      <div class="admin-section">
            <h2>Add Product</h2>
      <form action="./controllers/update_product_back.php" method="POST">
            <label for="">Product Name</label><br>
            <input type="hidden" name="pcode" value= "<?php echo $row['productCode']?>">
            <input type="text" name="productName" value="<?php echo $row['productName']?>"><br><br>
            <label for="">Product Quantity</label><br>
            <input type="text" name="productQuantity" value="<?php echo $row['product_quantity']?>"><br><br>
            <label for="">Product Unity Price</label><br>
            <input type="text" name="unityPrice" value="<?php echo $row['unit_price']?>"><br><br>
            <input type="submit" value="Update Product">
      </form>
      </div>
      <?php 

}?>
</body>
</html>

