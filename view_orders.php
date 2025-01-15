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
 <style>
      .btn{
         width: 100%;
         display: flex;
         justify-content: right;
         background: transparent;
      }
    
      .btn button{
         border: none;
         text-align: center;
         margin-bottom:8px;
    border: none;
    font-size: 1.2em;
    padding: 8px 15px;
    border-radius: .2em;
    background: linear-gradient(to left, rgb(23, 90, 23), rgb(1, 32, 1)); 
    color: white;
    transition: 0.3s ease-in-out;
    cursor: pointer;
      }

      .btn button:hover{
        background: linear-gradient(to right, rgb(23, 90, 23), rgb(1, 32, 1)); 
      }

      td a{
    text-decoration: none;
    color: white;
    padding: 0.4em;
    border-radius: 0.3em;
    background-color: red;
    cursor: pointer;
}
 </style>
<body>
    <script>
                   function printReport() {
            var printContents = document.getElementById('printableArea').innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>
      <div class="admin-section" id="printableArea">
        <div id="printableArea">
          <main class="table">
          <div class="table__header">
              <h2>All products</h2>
           </div>
           <?php   
                       $sql_order = "SELECT * FROM `order`";
                       $order_result = $conn->query($sql_order);
                       if($order_result -> num_rows > 0){
                         while($row = $order_result->fetch_assoc()){
                             $one = $row['order_date'];
                             $order_num = $row['order_number'];
                             $timestamp = strtotime($one);
                             $fomated_date = date("y-m-d", $timestamp);
                            //  echo $fomated_date;
                    ?>
            <table>
                <thead >
                    <?php
                                             $sql = "SELECT * FROM customer WHERE order_number = '$order_num'";
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
                        <th>Order id</th>
                        <th>Order date</th>
                        <th>Customer name</th>
                        <th>Telephone</th>
                        <th>Location</th>
                        <th>Product Code</th>
                        <th>Quantity Ordered</th>
                        <!-- <th>Actions</th> -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $row['cust_id']?></td>
                        <td><?php  echo $fomated_date?></td>
                        <td><?php echo $row['cust_name']?></td>
                        <td><?php echo $row['telephone']?></td>
                        <td><?php echo $row['location']?></td>
                        <td><?php echo $row['product_code']?></td>
                        <td><?php echo $row['quantity_ordered']?></td>
                        <!-- <td><a href="delete_order.php?orderCode=<?php echo $row['']; ?>">Delete</button></a> -->
                    </tr>
                </tbody>  
            </table>
            <?php
                      };
                        }
                      }
                        }

                    }
                }
                 ?>
           <!-- </main> -->
                    </main>
                    </div>     
      </div>
      <div class="btn">
                   <button onclick="printReport()">Print</button>
             </div> 
</body>
</html>