<?php
 
 include 'db_connect.php';

 $product_name = $_POST['productName'];
 $product_quantity = $_POST['productQuanity'];
 $unity_price = $_POST['unityPrice'];

 if(empty($product_name) || empty($product_quantity) || empty($unity_price)){
   header("location: add_product.php?msg=Please fill the credentials");
 }

 $total_price = $product_quantity * $unity_price;

$check_sql  = "SELECT * FROM products WHERE productName = '$product_name'";
$check_result = $conn->query($check_sql);

if($check_result -> num_rows > 0){
   header("location: add_product.php?msg=Product Already exists");
}else{
$sql = "INSERT INTO products (productName, product_quantity, unit_price, total_price) VALUES ('$product_name','$product_quantity', '$unity_price', '$total_price')";
$sql_command = $conn -> query($sql);
 
 if($sql_command){
   //  echo "<script>
   //               alert('Product succesfully added');
   //             //   window.location.href = 'view_product.php';
   //            <script/>";
              header("location: view_product.php?successmsg = Product inserted succesfully");
 }else{
   header('location: add_product.php?failmsg = Error occured in the process');
 }
}

?>