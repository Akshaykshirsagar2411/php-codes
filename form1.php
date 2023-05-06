<?php
$host = "localhost";
$username="root";
$pass="";
$dbname="form";



if(isset($_POST['submit'])){
 
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];


}

$name=$email=$number="";
//create connection

$conn=mysqli_connect($host,$username,$pass,$dbname);

//cheaking connection

If(!$conn){
    die("Connection failed:".mysqli_connect_error())
}
echo "database connectes sucessfully";

// insert data in database

$sql = "INSERT INTO reg5(Name,Email,Mobile)VALUES("$name","$email","$number")";

(mysqli_query($conn,$sql));

mysqli_close();




























// $servername = "localhost";
// $username = "root";
// $password = "";
//  $dbname = "form";



// $conn = mysqli_connect($servername, $username, $password,$dbname);

// // I am cheaking connection here

// $name=$email="";


// if(isset($_POST['name'])|| isset($_POST['email']))
// {
//     $name = $_POST['name'];
//     echo "$name<br>";

//     $email = $_POST['email'];
//     echo "$email<br>";



// }
// // I am cheaking connection here

// if(!$conn){
//     die("connection failed: "   . mysqli_connect_error());
// }

//     // echo "connected sucessfully<br>";

// $sql="INSERT INTO reg2 (Name,Email)VALUES('$name','$email')";

// (mysqli_query($conn,$sql));

// mysqli_close($conn);

// echo "Data uploaded in database sucessfully"



// // echo "sucessful"
// 
?>