<?php
    $servername="localhost";
    $dbname="customer360";
    $username="root";
    $pswd="";
    
    $conn=mysqli_connect($servername,$username,$pswd,$dbname);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $customerid = $_COOKIE["customer"];
    $sql = "SELECT * FROM customer_details WHERE Customer_ID = '$customerid'";
    $result = mysqli_query($conn, $sql);    
    $row = mysqli_fetch_assoc($result);
?>