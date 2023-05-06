<?php
$name= array("akshay","ram", "raju","suraj","sunil");

$arrlenth = count($name);

for($y=0; $y<$arrlenth; $y++){
    echo $name[$y], "<br>";
}



echo "<br><br><br>";


echo "indexed arrays<br><br>";

$A = array("sonu","raj","hement","rahul");

$arrlenth = count($A);

for($x=0; $x <$arrlenth; $x++){
    echo "Index Number [$x]", $A[$x];

    echo "<br>";
}

echo "<br><br><br>Multidimentional Arry<br><br>";

$mobile =array(
    array("Nokia",15000,3),
    array("samsung",20000,2),
    array("sony",25000,4),
    array("apple",60000,6)
);

for($row=0; $row<4; $row++){

    for($col=0;$col<3;$col++){
        echo $mobile[$row][$col];
        echo "|";
    }
    echo"<br>";
}



?>