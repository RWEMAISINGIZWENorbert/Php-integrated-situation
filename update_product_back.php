<?php
  include 'db_connect.php';

  $pcode = $_POST['pcode'];
  $productName = $_POST['productName'];
  $productQuantity = $_POST['productQuantity'];
  $unityPrice = $_POST['unityPrice'];

  $total_price = $productQuantity  * $unityPrice;

  $sql_command = "UPDATE products SET productName = '$productName', 
                                                              product_quantity = '$productQuantity', 
                                                              unit_price = '$unityPrice', 
                                                              total_price = '$total_price' 
                                                              WHERE productCode = '$pcode'";                     

 if(mysqli_query($conn, $sql_command)) {
    echo "<script>
         alert('Product updated succesfuly');
         window.location.href = 'view_product.php';
    </script>";
 } else{
    echo "<script>
    alert(' Failed to  update the product');
    window.location.href = 'view_product.php';
</script>";
 }                                                   
?>