<?php

include "dbconnect.php";

$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];

            $sql = mysqli_query($conn,"insert into form(name, email, address) values ('$name','$email','$address')");
            echo "Data Inserted successfully";
            header('Location: login.php'); 
            
?> 

