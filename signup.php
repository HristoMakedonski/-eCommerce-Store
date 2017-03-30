<?php include './includes/head.php'; ?>
<title>Registration</title>    
</head>
    <body>
<?php include './includes/header.php'; ?>       
       
<?php include './includes/navbar.php';?>   
        <!-- Here is the products section -->     
   
        <div class="signup_form">
            <form method="post">
                <h3>
                    Sing UP
                </h3>
                <table>
                    <tr>
                        <td><label>Name</label></td>
                        <td>  <input type="text"  name="name" placeholder="Type your name"/></td>
                    </tr>
                    <tr>
                        <td>
                
                    <label>Email</label></td>
                    <td><input type="email" name="email" placeholder="Type your email"/></td>
                    <tr>
                        <td>
                    <label>Mobile No#</label></td>
                    <td><input type="tel" name="cell_no" placeholder="Type your number"/></td>
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
     $name = $_POST['name'];
     $email = $_POST['email'];
     $cell_no = $_POST['cell_no'];
     $password = $_POST['password'];
     
      $user_id = uniqid();
      $query = "INSERT INTO `users`(`user_id`, `name`, `email`, `cell_no`, `password`) VALUES ('$user_id','$name','$email','$cell_no','$password')";
      $run = mysqli_query($conn, $query);
    
      if($run ===true){
          echo "You have created your account successfully.";
      }else{
          echo "You are unable to create your account";
      }
      
 }
 
 
 ?>       
    </body>
</html>

