<?php
  
  include 'db_connect.php';
  $pcode = $_GET['productCode'];

  $delete_query = "DELETE FROM products WHERE productCode = '$pcode'";
  $delete_result = $conn->query($delete_query);

  if($delete_result) {
    // echo "<script>
    //      alert('Product deleted succesfuly');
    //      window.location.href = 'view_product.php';
    // </script>";
    header("location: view_product.php?successmsg = Product deleted successfully");
 } else{
    echo "<script>
    alert(' Failed to delete the product');
    window.location.href = 'view_product.php';
</script>";
 }    
  
?>