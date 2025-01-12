<?php
include 'db_connect.php';
include 'admindashboard.php';

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
           <div class="header">
               <h2>View Daily Order Report</h2>
           </div>
           <main class="table">
            <table>
                <thead >
                    <tr>
                        <th>Order id</th>
                        <th>Order date</th>
                        <th>Customer name</th>
                        <th>Telephone</th>
                        <th>Location</th>
                        <th>Product Code</th>
                        <th>Quantity Ordered</th>
                    </tr>
                </thead>
                <tbody>
                    <?php   
                      $sql = "SELECT * FROM customer";
                      $result = $conn->query($sql);
                      if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            $order_number = $row['order_number'];
                            $sql_date = "SELECT * FROM `order` WHERE order_number = '$order_number'";
                            $sql_result = $conn->query($sql_date);
                            if($sql_result -> num_rows > 0){
                               while($sql_row = $sql_result->fetch_assoc()){

                    ?>
                    <tr>
                        <td><?php echo $row['cust_id']?></td>
                        <td><?php  echo $sql_row['order_date']?></td>
                        <td><?php echo $row['cust_name']?></td>
                        <td><?php echo $row['telephone']?></td>
                        <td><?php echo $row['location']?></td>
                        <td><?php echo $row['product_code']?></td>
                        <td><?php echo $row['quantity_ordered']?></td>
                    </tr>
                </tbody>
                <?php
                      };
                        }
                      }
                        }
                 ?>
            </table>
           </main>
      </div>
</body>
</html>