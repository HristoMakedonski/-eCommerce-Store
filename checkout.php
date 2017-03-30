<?php include './includes/head.php'; 


?>




<title>Welcome to my store</title>    
</head>
    <body>
<?php include './includes/header.php'; ?>       
       
<?php include './includes/navbar.php';?>   
        <!-- Here is the products section -->     
        <h2 align="center">Order Products</h2>
        <?php
        if($_SESSION['order_id'] !=''){
            $total_bill = 0;
            $item_name  = "";
            $item_num = "";
            $order_id =   $_SESSION['order_id']; 
            mysqli_query($conn, "delete from cart where product_id='$_GET[product_id]' and order_id='$order_id'");
            
            
            
            
            $query = mysqli_query($conn, "select * from products INNER JOIN cart ON cart.product_id=products.product_id where cart.order_id='$order_id' ");
            while ($row = mysqli_fetch_array($query)){
                $total_bill = $total_bill+$row['product_price'];
                $item_name .=$row['product_name'].",";
                $item_num .=$row['product_id'].",";
            
      
        
            ?>
        <div class="order_section">
            <img src="Images/<?php echo $row['product_img'];?>" style="width: 200px; height: 130px; float: left"/>
            <a href="checkout.php?product_id=<?php echo $row['product_id']?>" style="float: right;">x</a>
            <h4><?php echo $row['product_name'] ?></h4>
            <h5>Price: $<?php echo $row['product_price']?></h5>
            <p>Qty:<?php echo $row['product_qty']?></p>
            
        </div> 
            <?php  }?>
            <div class="order_section">
            <div style="text-align:center; font-size: 25px ">
                <?php  echo "Total Bill $".$total_bill;?>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post">

  <!-- Identify your business so that you can collect the payments. -->
  <input type="hidden" name="business" value="herschelgomez@xyzzyu.com">

  <!-- Specify a Buy Now button. -->
  <input type="hidden" name="cmd" value="_xclick">

  <!-- Specify details about the item that buyers will purchase. -->
  <input type="hidden" name="item_name" value="<?php echo $item_name ;?>">
  <input type="hidden" name="item_number" value="<?php  echo $item_num ;?>">
  <input type="hidden" name="amount" value="<?php  echo  $total_bill ;?>">
  <input type="hidden" name="currency_code" value="USD">


   <input type="hidden" name="return" value="http:/localhost/mystore/success.php">
   <input type="hidden" name="cancel_return" value="http:/localhost/mystore/paypal_cancel.php">


  <!-- Display the payment button. -->
  <input type="image" name="submit" border="0"
   src="https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif" align="center" style="margin-right:7px;">
  <img alt="" border="0" width="1" height="1"
  src="https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif" align="left" style="margin-right:7px">

</form>

            </div>
        </div>       
      <?php 
            }else{  ?>
        <div class="order_section">
            <h2>You have not addded any product</h2>
        </div>
       <?php }?> 
        
        
        

   
   
   
   
   
  <?php include './includes/footer.php';?> 
        
    </body>
</html>

