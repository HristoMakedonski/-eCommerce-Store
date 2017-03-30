<?php include './includes/head.php'; ?>
<title>Welcome to my store</title>    
</head>
    <body>
<?php include './includes/header.php'; ?>       
       
<?php include './includes/navbar.php';?>   
        <!-- Here is the products section -->     
   
        <div class="product_section">
            <h2>Featured Products</h2>
            <?php 
            $query = "select * from products order by rand() limit 9";
            $run = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($run)){
            ?>
            <div class="single_product text-center">
                <img src="Images/<?php echo $row['product_img']?>" alt="Image_One"/>
                <h4><?php echo $row['product_name']?></h4>
                <h4>Product Price: $<?php echo $row['product_price']?>/-</h4>
                <h4><a href="index.php?product_id=<?php echo $row['product_id'];?>">Add to Cart</a></h4>
            </div>
            <?php } ?>
           
        </div>   
   <!--footer is right here -->

   
   
   
   
   
  <?php include './includes/footer.php';?> 
        
    </body>
</html>
<?php
if(@$_GET['product_id'] !=''){
    $pro_id = $_GET['product_id'];
    
    if(empty($_SESSION['order_id'])){
        $_SESSION['order_id']=  uniqid();
    }
  $order_id = $_SESSION['order_id'];
  
  $check_result = mysqli_query($conn, "select * from cart where order_id='$order_id' and product_id='$pro_id'");

 $run = mysqli_num_rows($check_result);

if($run > 0){
      $query = mysqli_query($conn, "update cart set product_qty=product_qty+1 where order_id='$order_id' ");
      if($query){
          echo "<script>alert('Cart has been updated')</script>";
      }
  }
  else{

  
 $query = mysqli_query($conn, "insert into cart(order_id,product_id,product_qty)values ('$order_id','$pro_id', 1)");
 
 if($query === true){
     echo "<script>alert('Prodcut has been added to your cart.')</script>";
 }
  }
}