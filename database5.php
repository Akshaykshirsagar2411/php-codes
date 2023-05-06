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

//SQL query to selecting all record from table


$sql = "SELECT id, stname,email,mobile from students";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "<b>ID</b> " .$row["id"]. ", <b>Name:</b> " .$row["stname"]. ", <b>Email:</b> " .$row["email"].  ",<b>Mobile:</b> " .$row["mobile"]. "<br>";
    }
}
else{
    echo "no record found";
}



?>