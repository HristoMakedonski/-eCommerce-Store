<?php

$conn = mysqli_connect("localhost", "root", "","mystore");

if($conn){
    //echo "Database has been configured.";
}else{
    echo "You have no connection with database";
}

