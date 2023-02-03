<?php
$servername="localhost";
$username="root";
$dbname="customer360";
$pswd="";

$conn= mysqli_connect($servername,$username,$pswd,$dbname);

if(!$conn){
    die("Eroor Connecting to Database".mysqli_connect_error());
}

?>