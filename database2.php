<?php
$servername = "localhost";
$username = "root";
$password = "";
// $dbname = "school";

// I am connection with mysql

$conn = mysqli_connect($servername, $username, $password);

// I am cheaking connection here

if(!$conn){
    die("connection failed: "   . mysqli_connect_error());
}

    echo "connected sucessfully";


// sql query to creating a database in mysql

$sql = "CREATE DATABASE school";
 
if(mysqli_query($conn,$sql)){
   echo "database created sucessfully"; 
}
else{
    echo "Error creating database:" .mysqli_error($conn);
}

mysqli_close($conn);



//
?>