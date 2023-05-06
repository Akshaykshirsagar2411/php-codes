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

?>