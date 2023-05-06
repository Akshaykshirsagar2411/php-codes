<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  

<form  method="post" id="for">

Name:<input type="text" name="fname" ><br><br>

E-mail:<input type="text" name="email"><br>

<input type="submit" name="save" value="submit">




<!-- 127.0.0.1 -->
</form>

<?php
if(isset($_POST['fname']) || $_post['email'])
{
$fname = $_POST['fname'];
echo "Hello $fname";

echo "$email";



}



?>

<style>
  #for{
    background-color: aqua;
  }
</style>
</body>
</html>