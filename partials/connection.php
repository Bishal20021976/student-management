<?php
$servername="localhost";
$username="root";
$password="";
$dbname="student";
//Connecting to the database
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("Sorry! We could not connect to the database.");
}
else{
    // echo "Connection was successful!";
}
?>