<?php
if($_GET['Operacion'] == "Area"){
     $Radio = $_POST['Radio'];
    $Area = PI() * ($Radio * $Radio);
    echo $Area;
}else{
    $Radio = $_POST['Radio'];
    $Longitud = (2 * M_PI) * $Radio;
    echo $Longitud;
}