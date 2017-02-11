<?php
session_start();
if(isset($_REQUEST['nume'])){
    $numero = $_REQUEST['nume'];
    if (count($_SESSION['arrNumero']) > 0){
        if($numero == 0){
            $suma = 0;
            $numeros = -1;
            foreach ($_SESSION['arrNumero'] as $key => $value) {
                $suma = $value['numero'] + $suma;
                $numeros ++;
            }
            echo "Su suma es igual a". $suma ;
            echo "<br> Se pidieron " .$numeros ." numeros";
            session_destroy();
        }else{
            array_push($_SESSION['arrNumero'], array('numero' => $numero ));
            header("Location: ejer14.php");
        }
    }else{
        $_SESSION['arrNumero'] = array();
        array_push($_SESSION['arrNumero'], array( 'numero' => $numero ));
        header("Location: ejer14.php");
    }
}
?>