<?php
 include 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/styles.css">

    <style>

     table tr:nth-child(even){
        background-color: rgb(199, 196, 196);
     } 
        tr td input{
       font-size: 16px;
      border: none;
      width: 100%;
     height: 100%;
     padding: 0.5rem 0;
    outline:  none;
    background: transparent;
  }

  p.success{
   text-align: center;
   color: green;
   font-size: 20px;
  }
  
  p.fail{
    text-align: center;
   color: red;
   font-size: 20px;
  }
   
   .data{
  width: 100%;
  }
 
   .data{
   display: flex;
   flex-direction: column;
  }

  .item label{
    font-size: 1.2em;
    font-weight: 600;
    color:rgb(32, 31, 31);
 }

  .item input{
  width: 100%;
  background: transparent;
  outline: none;
  border: 1px solid rgb(88, 88, 88);
  padding: 10px 0;
  border-radius: 8px;
  }

 .data .btn{
  display: flex;
  justify-content: center;
  margin: 2rem 0;
 }

 .main-data{
  /* transform: translateX(10rem); */
  margin-left: 12rem;
  display: flex;
  gap: 4rem;
 }

 p.fill{
  text-align: center;
  font-size: 1.2em;
  font-weight: 600;
  background: linear-gradient(to left, rgb(3, 17, 3), rgb(1, 32, 1)); 
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
 }

  .data button{
    /* display: flex; */
    width: 20%;
    text-align: center;
    border: none;
    font-size: 1.2em;
    padding: 16px 0;
    border-radius: 2em;
    background: linear-gradient(to left, rgb(23, 90, 23), rgb(1, 32, 1)); 
    color: white;
    transition: 0.3s ease-in-out;
    cursor: pointer;
  }

  .data button:hover{
   background: linear-gradient(to right, rgb(23, 90, 23), rgb(1, 32, 1)); 
  }

  
    </style>
</head>
<body>
      <h2>Place an order</h2>
      
       <form action="process_order_product.php" method="POST">
         <?php
           if(isset($_GET['successmsg'])){
             echo "<p class = 'success'>". $_GET['successmsg'] ."</p>";
           }
           if(isset($_GET['failmsg'])){
            echo "<p class = 'fail'>". $_GET['failmsg']. "</p>";
           }
         ?>
            <table border="1">
                     <tr>
                        <th>Product code</th>
                        <th>Product name</th>
                        <th>Product  Quantity</th>
                        <th>Unity price</th>
                        <th>Quantity</th>
                     </tr>
                     <?php
                        $querry = mysqli_query($conn, 'SELECT * FROM products');
                        while($row = mysqli_fetch_assoc($querry)){
                          ?>
                           <tr>
                              <td><?php  echo $row['productCode']?></td>
                              <td><?php  echo $row['productName']?></td>
                              <td><?php  echo $row['product_quantity']?></td>
                              <td><?php  echo $row['unit_price']?></td>
                              <!-- <td><input type="number" name='order_quantities[<?php echo $row["productCode"]?>]' min = '0' max = <?php echo $row['product_quantity']?>></td> -->
                              <td><input type="number" placeholder="Enter the quanity" name='order_quantities[<?php echo $row['productCode']?>]' ></td>
                           </tr>
                          <?php
                        }
                     ?>       
            </table>
             <div class="data">
             <!-- <br> <br> -->
              <p class="fill">Fill credentials</p>
              <div class="main-data">
              <div class="item">
             <label for="">Customer name</label><br>
             <input type="text" name="customer_name" required><br><br>
             </div>
              <div class="item">
             <label for="location">Location</label><br>
              <input type="text" name="location"><br><br>
              </div>
              <div class="item">
              <label for="telephone">Phone number</label><br>
              <input type="text" name="telephone" required>
              </div>
              </div>
               <!-- <div class="item">
              <label for="location">Place order</label>
              <input type="text">
              </div> -->
               <div class="btn">
              <button type = 'submit' name="submit">Place order</button>
              </div>
              </div>
       </form>
</body>
</html>