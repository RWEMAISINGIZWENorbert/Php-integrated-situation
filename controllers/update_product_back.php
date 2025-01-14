<?php
  include '../db_connect.php';

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
                                                              
                                                              
    $result = $conn->query($sql_command);                                                          

 if($result) {
    header("location: ../view_product.php?successmsg=Product updated succsefully");
 } else{
    echo "<script>
    alert(' Failed to  update the product');
    window.location.href = 'view_product.php';
</script>";
 }                                                   
?>