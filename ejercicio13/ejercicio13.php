<?php
session_start();
if( (!empty($_POST['codigo'])) && (!empty($_POST['litros'])) && (!empty($_POST['precio']))){

    $codigo = $_POST['codigo'];
    $litros = $_POST['litros'];
    $precio = $_POST['precio'];
    if (count($_SESSION['arrFacturas']) > 0){
        if(count($_SESSION['arrFacturas']) == 3){
            $valorTotal = 0; $cantidadFacturas=0;
            foreach ($_SESSION['arrFacturas'] as $key => $value) {
                $valor = $value['Litros'] * $value['Precio'];
                if($valor >600){
                    $cantidadFacturas += 1;
                }
                $valorTotal += $valor;
            }
            echo "La Facturacion Total es: ".$valorTotal."</br>";
            echo "Cantidad de Litros Vendido del Articulo 01: ".$_SESSION['arrFacturas'][0]['Litros']."</br>";
            echo "Cuantas Facturas son Mayores de 600 Euros son: ".$cantidadFacturas."</br>";
            session_destroy();
        }else{
            array_push($_SESSION['arrFacturas'], array('Codigo' => $codigo, 'Litros' => $litros, 'Precio' => $precio));
            header("Location: Ejercicio13.php");
        }
    }else{
        $_SESSION['arrFacturas'] = array();
        array_push($_SESSION['arrFacturas'], array( 'Codigo' => $codigo, 'Litros' => $litros, 'Precio' => $precio ));
        header("Location: Ejercicio13.php");
    }

}
?>