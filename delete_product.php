<?php
  
  include 'db_connect.php';
  $pcode = $_GET['productCode'];

  $delete_querry = "DELETE FROM products WHERE productCode = '$pcode'";

  if(mysqli_query($conn, $delete_querry)) {
    echo "<script>
         alert('Product deleted succesfuly');
         window.location.href = 'view_product.php';
    </script>";
 } else{
    echo "<script>
    alert(' Failed to delete the product');
    window.location.href = 'view_product.php';
</script>";
 }    
  
?>