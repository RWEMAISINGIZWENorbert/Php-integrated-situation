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
<style>
     table tr:nth-child(even){
        background-color: rgb(199, 196, 196);
     } 
     p.successmsg{
       background: transparent;
       color: rgb(23, 90, 23);
       margin-left: 20rem;
     }
</style>
<body>
   <?php
      if(isset($_SESSION['email'])){
   ?>
    <div class="admin-section">
        <?php
          if(isset($_GET['successmsg'])){
            echo "<p class = 'successmsg'>".$_GET['successmsg'] ."</p>";
          }
        ?>
       <main class="table">
          <div class="table__header">
              <h2>All products</h2>
           </div>
           <div class="table__body">
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
                   <?php while($row = $result->fetch_assoc()){
                    // print_r($row);
                    ?>
                    <tr>
                         <td><?php echo $row['productCode']?></td>
                        <td><?php  echo $row['productName'] ?></td>
                        <td><?php  echo $row['product_quantity']  ?></td>
                        <td><?php  echo $row['unit_price'] ?></td>
                        <td><?php  echo $row['total_price'] ?> frw</td>
                        <td class="actions">
                            <a href="update_product.php?productCode=<?php echo $row['productCode']; ?>">Update</a>
                            <a href="delete_product.php?productCode=<?php echo $row['productCode']; ?>">delete</a>
                        </td>
                    </tr>
                   </tbody>
                   <?php }}?>
            </table>
            </div>
                   </main>
       </div>
       <?php }else{
          header("location: index.php");
       }?>
</body>
</html>