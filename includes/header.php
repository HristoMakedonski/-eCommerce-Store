<?php
$user_id = @$_SESSION['user_id'];

$query = mysqli_query($conn, "select name from users where user_id='$user_id'");
while($row = mysqli_fetch_array($query)){
 $userName = $row['name'];
}


?>




<div class="header">
            <ul>
                <li><a href="#">MyLogo</a></li>
                <li><a href="index.php">Home</a></li>
                <?php 
                if($_SESSION['user_id'] != true){
                ?>                 
                <li><a href="signup.php">Sign Up</a></li>
                <li><a href="signin.php">Sign In</a></li>
                <?php  }else{ ?>
                <li><a href="signout.php">Sign Out</a></li>
                <li><a><span style="color: yellow;">Welcome</span></a><?php echo $userName?></li>
                <?php  } ?>
                <li><a href="checkout.php">Checkout</a></li>
            </ul>
        </div>