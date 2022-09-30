<?php
    $severname = "localhost";
    $username = "root";
    $password = "";
    $database = "student"; 
    $conn = mysqli_connect($severname,$username,$password,$database);
    if($conn === false){
        die("Connection failed: " . mysqli_connect_error());
    }
?>