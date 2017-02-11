<?php


if (!empty($_POST['Valor'])) {
    $Vinicial = $_POST['Valor'];

    $impuesto = $Vinicial + 300;
    $impuestoS = $Vinicial + 30;
    $Soldados = $Vinicial * 0.05;
    $valorTotal = $impuesto + 30 + $Soldados ;
    echo"El valor total del computador es :<h2>$valorTotal</h2><br/>";
}
?>