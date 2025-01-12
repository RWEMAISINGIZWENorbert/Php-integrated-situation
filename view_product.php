<?php
 include 'admindashboard.php';
 include 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/index.css">
</head>
<body>
    <div class="admin-section">
       <main class="table">
        <div class="table__header">
              <h4>All products</h4>
        </div>
            <table>
                <?php 
                 $sql = 'SELECT * FROM products';
                 $result = $conn->query($sql);
                if ($result->num_rows > 0){
                
                ?>
                   <thead>
                      <tr>
                        <th>Product Code</th>
                        <th>Product name</th>
                        <th>Product Quantity</th>
                        <th>Unity Price</th>
                        <th>Total price</th>
                        <th>Actions</th>
                      </tr>
                   </thead>
                   <tbody>
                   <?php while($row = $result->fetch_assoc()){ ?>
                    <tr>
                         <td><?php echo $row['productCode']?></td>
                        <td><?php  echo $row['productName'] ?></td>
                        <td><?php  echo $row['product_quantity']  ?></td>
                        <td><?php  echo $row['unit_price'] ?></td>
                        <td><?php  echo $row['total_price'] ?></td>
                        <td>
                            <a href="update_product.php?productCode=<?php echo $row['productCode']; ?> ">Update</a>
                            <a href="delete_product.php?productCode=<?php echo $row['productCode']; ?>">delete</a>
                        </td>
                    </tr>
                   </tbody>
                   <?php }}?>
            </table>
                   </main>
       </div>
</body>
</html>