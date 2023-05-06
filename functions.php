<?php


//

echo "Welcome to Functions<br>";
function printline(){
    for($i=1;$i<=100;$i++)
    {
        echo "-";
   
    

    }
}


printline();
echo "<br> You are learning about php functions<br>";
printline();
echo "<br><br><br><br>";

//2)
printline();

function calper($total){

        $per = $total/500*100;
        return($per);
        echo "<br>";

}
echo "<br>";
echo "Rohan has total 400 marks & percentage is : ";

echo calper(400);
echo "<br>";
printline();




?>