<?php

$to_email = "akshirs2020@gmail.com";
$subject = "simple Email test via php";
$body= "Hi i am akshay how are you everyone";
$headers = "From: kshirsagarsanjay867@gmail.com";


if(mail($to_email,$subject, $body,$headers)) {
    echo "mail sent";

}else{
    echo "email send fail";
}
?>
