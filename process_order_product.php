<?php
 
 include 'db_connect.php';


 if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['order_quantities'])){
    $customer_name = $_POST['customer_name'];
    $location = $_POST['location'];
    $telephone = $_POST['telephone'];

    $order_date = date('Y-m-d  H:i:s');
    $insert_order = "INSERT INTO `order` (order_date) VALUES ('$order_date')";

    if(mysqli_query($conn, $insert_order)){
        $order_number = mysqli_insert_id($conn);

        foreach($_POST['order_quantities'] as $productcode => $quantity){
            $querry = "SELECT * FROM `products` WHERE productCode = '$productcode'";
            $result = mysqli_query($conn, $querry);
            $product =  mysqli_fetch_assoc($result);

            if($quantity <= $product['product_quantity']){
                $new_quantity = $product['product_quantity'] - $quantity;
                // $update_product =  "UPDATE products SET product_quantity = '$new_quantity' WHERE  product_Code = '$productcode' ";
                $update_product =  "UPDATE products SET product_quantity = '$new_quantity' WHERE  product_quantity = '3' ";
                mysqli_query($conn, $update_product);
                $insert_customer =  "INSERT INTO `customer`(cust_name, location, telephone, product_code, order_number, quantity_ordered)
                                                VALUES('$customer_name', '$location', '$telephone', '$productcode', '$order_number', '$quantity')";
                mysqli_query($conn, $insert_customer);  
            }else{
                // echo '<script> alert("ordered succsefully") window.location.href = "view_product.php" ;</script>';
                echo '<script> alert("Not enouh space")</script>';
            }
        }        
        echo '<script> alert("ordered succsefully"); window.location.href = "view_product.php" ;</script>';
    } else{
        echo '<script> alert("failed to place an oreder ") window.location.href = "order_product.php" ;</script>';
  }

 }

?>

<!-- <script> alert("ordered succsefully"); window.location.href = "view_product.php" ;</script> -->