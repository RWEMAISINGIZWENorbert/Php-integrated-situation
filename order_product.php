<?php
 include 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <h1>Place an order</h1>
      
       <form action="process_order_product.php" method="POST">
            <table border="1">
                     <tr>
                        <th>Product code</th>
                        <th>Product name</th>
                        <th>Product  Quantity</th>
                        <th>Unity price</th>
                        <th>Order Quantity</th>
                     </tr>
                     <?php
                        $querry = mysqli_query($conn, 'SELECT * FROM products');
                        while($row = mysqli_fetch_assoc($querry)){
                          echo "<tr>";
                          echo "<td>" . $row['productCode']. "</td>";   
                          echo "<td>" . $row['productName']. "</td>";   
                          echo "<td>" . $row['product_quantity']. "</td>";   
                          echo "<td>" . $row['unit_price']. "</td>";   
                          echo "<td> <input type = 'number' name = 'order_quantities[". $row['productCode']. "]' min = '1' max ='". $row['product_quantity'] . "' value = '1'" ."</td>"; 
                          echo "</tr>";  
                        }
                     ?>       
            </table>
  
             <br> <br>
             <label for="">Customer name</label>
             <input type="text" name="customer_name" required><br><br>

             <label for="location">Location</label>
              <input type="text" name="location">

              <label for="telephone">Phone number</label>
              <input type="tel" name="telephone" required>

              <label for="location">Place order</label>
              <input type="text">

              <button type = 'submit'>Place order</button>
       </form>
</body>
</html>