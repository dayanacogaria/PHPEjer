<?php
echo" <form method='POST'> ";

echo "Ingrese un numero : <input name = 'numero' type='text'>  ";


$a =  $_POST['numero'];


echo "</form>";
$i = 1;
$c = 0;

while($i  <= $a){

    if((($i % 2)!= 0 && ($i % 3)!= 0 && ($i % 5)!= 0 && ($i % 7)!= 0 ) || ($i == 3 || $i == 5  || $i == 7 || $i == 2)){
        $c++;
    }

    $i++;

}


echo "Tiene ".$c." numeros primos entre 1 y ".$a;
?>