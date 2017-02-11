<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>





<form >

    Digite el dia : <input type="number" value='dia' name='dia' required> <br>
    Digite el mes : <input type="number" value='mes' name='mes' required> <br>
    Digite el año : <input type="number" value='anio' name='anio' required > <br>

    <input type='submit' value='Enviar Datos' name='enviar' >

</form>



<?php
$aux = 0;
if(isset($_REQUEST['enviar'])){

    $dia = $_REQUEST['dia'];
    $mes = $_REQUEST['mes'];
    $anio = $_REQUEST['anio'];
    if($mes == 1 || $mes == 3 || $mes == 5 || $mes == 7 || $mes == 8 || $mes == 10 || $mes == 12){
        if($dia <= 31){
            $aux++;
        }
    }
    if( $mes == 4 || $mes == 6 || $mes == 9 || $mes == 11){
        if($dia <= 30){
            $aux++;
        }
    }
    if( $mes == 2){
        if($dia <= 28){
            $aux++;
        }
    }
    if($aux == 1){
        echo  "La fecha ".$dia. "-" . $mes. "-".$anio ." es correcta" ;
    }else{
        echo  "La fecha ".$dia. "-" . $mes. "-".$anio ." es incorrecta" ;
    }
}
?>

</body>
</html>