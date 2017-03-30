<?php include './includes/head.php';

if($_SESSION['user_id'] != "" ){
     header('Location: index.php');
 }
?>
<title>Sin In</title>    
</head>
    <body>
<?php include './includes/header.php'; ?>       
       
<?php include './includes/navbar.php';?>   
        <!-- Here is the products section -->     
   
        <div class="signup_form">
            <form method="post">
                <h3>
                    Sing In
                </h3>
                <table>
                    <td>
                    <label>Email</label></td>
                    <td><input type="email" name="email" placeholder="Type your email"/></td>
                    <tr>
                     
                        <td>
                    <label>Password</label></td>
                    <td><input type="password" name="password" placeholder="Type your password"/></td>
                    <tr>
                        <td>
                    <input type="submit" name="submit" value="Sing Up"/></td>
                 </table>       
                
            </form>
        </div> 
   <!--footer is right here -->

   
   
   
   
   
  <?php include './includes/footer.php';?> 
 <?php
 

    
 
 if(isset($_POST['submit'])){
    
     $email = $_POST['email'];
     $password = $_POST['password'];
     
     $query = mysqli_query($conn, "select * from users where email='$email' and password='$password'");
     $check = mysqli_num_rows($query);
     
     if($check > 0){
         while ($row = mysqli_fetch_array($query)){
              echo $_SESSION['user_id'] = $row['user_id'];
             }
              header('Location: index.php');
     }else{
         echo "You have entered incorrect email or password";
     }
 }
 
 
 ?>       
    </body>
</html>

