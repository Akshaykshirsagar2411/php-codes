<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" id="form">
   
       Name: <input type="text" id="name"><br><br>

      Email:  <input type="email" name="email"><br><br>

      Username:<input type="gender" name="gender"><br><br>

   
        
       Mobile: <input type="number" name="phone"><br><br>

        <input type="submit" name="submit" id="">



    </form>

<?php

$firstName = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$password = $_POST['password'];
$mobile = $_POST['phone'];

//dtabase connection

$conn = new mysqli('localhost' , 'root','','form');
if($conn->connect-error){
    die('Connction Failed  : ' .$conn->connect_error);
}else{
  $stmt = $conn->prepare("insert into registration(firstname,email,gender,password mobile)values(?,?,?,?,?)");
    $stmt->bind_param("ssssi",$firstName,$email,$gender,$password,$mobile);
    $stmt->execute();
    echo "Registration sucessfully";
    $stmt->close();
    $conn->close();
  
}
?>


    <style>
        #form{
            align-content: center;
            border: 1px solid black;
            margin-left: 35rem;
            margin-top: 5rem;
            margin-right: 30rem;
            padding: 50px;
            height: 500px;
        }
    </style>
</body>
</html>