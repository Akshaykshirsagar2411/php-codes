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



//sql query ti insert data in students table

$sql = "INSERT INTO students(stname, email, mobile)
VALUES ('Akshay','akshay2020@gmail.com','9561757557')";




if(mysqli_query($conn, $sql)) {
    echo "New record inserted  sucessfully"; 
 }
 else{
     echo "Error creating database:" .mysqli_error($conn);
 }
 
 mysqli_close($conn);





?>
