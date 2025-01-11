<?php
 
 include 'db_connect.php';

 $product_name = $_POST['productName'];
 $product_quantity = $_POST['productQuanity'];
 $unity_price = $_POST['unityPrice'];
 $total_price = $product_quantity * $unity_price;

//  Insert in the database table
$sql = "INSERT INTO products (productName, product_quantity, unit_price, total_price) VALUES ('$product_name','$product_quantity', '$unity_price', '$total_price')";
//  $sql_command =  mysqli_query($conn, $insert);

$sql_command = mysqli_query($conn, $sql);
 
 if($sql_command){
    echo "<script>
                 alert('Product succesfully added');
                 window.location.href = 'view_product.php';
              <script/>";
 }else{
    echo "<script>
              alert('Failed to add the new Product');
               window.location.href = 'add_product.php';
           <script/>";
 }


?>