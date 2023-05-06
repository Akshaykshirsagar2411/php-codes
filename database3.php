<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

// I am connection with mysql

$conn = mysqli_connect($servername, $username, $password, $dbname);

// I am cheaking connection here

if(!$conn){
    die("connection failed: "   . mysqli_connect_error());
}

    echo "connected sucessfully<br>";



    //SQL query to create table using in (school) database


    $sql = "CREATE TABLE Students (
        id INT auto_increment PRIMARY KEY,
        stname VARCHAR(30) NOT NULL,
        email VARCHAR(40),
        mobile VARCHAR(10) NOT NULL
 )";


if(mysqli_query($conn, $sql)) {
    echo "database students created sucessfully"; 
 }
 else{
     echo "Error creating database:" .mysqli_error($conn);
 }
 
 mysqli_close($conn);
 
 ?>   