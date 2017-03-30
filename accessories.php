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
            $query = "select * from products where product_cat='accessories' order by rand() limit 9";
            $run = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($run)){
            ?>
            <div class="single_product text-center">
                <img src="Images/<?php echo $row['product_img']?>" alt="Image_One"/>
                <h4><?php echo $row['product_name']?></h4>
                <h4>Product Price: $<?php echo $row['product_price']?>/-</h4>
                <h4><button>Add to Cart</button></h4>
            </div>
            <?php } ?>
           
        </div>   
   <!--footer is right here -->

   
   
   
   
   
  <?php include './includes/footer.php';?> 
        
    </body>
</html>