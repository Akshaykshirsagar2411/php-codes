<?php
$a=10;


echo "while<br>";

while($a<=20){
    echo "The number is: $a <br>";
    $a++;
}

echo "<br><br>";

echo "do-while<br>";

do{
    echo "The number is: $a <br>"; 
    $a++;
    
    

}while($a<=30);


//for loop

echo "<br><br>";

echo "for loop<br>";
 $b;
for($b=1;$b<=20;$b++)
{
    echo "number is =$b<br>";
}


//foreach
echo "<br><br>foreach loop<br><br>";

$mobile = array("nokia","samsung","sony","apple");

foreach($mobile as $value)
{
    echo "$value<br>";
}


echo "<br><br><br><br><br><br>";
?>