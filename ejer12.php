<form method='POST' >

    Ingrese un numero : <input name = 'num' type='text'/>

    <input name='numero' type='submit' value='Enviar Numero' />


</form>

<?php
$numero = -12334333;
if(isset($_REQUEST['numero'])){

    $a = $_POST['num'];

    if($a == $numero){ echo"Felicitaciones adivinaste el numero";

    }else if($a > $numero){ echo "El numero es menor que $a";

    }else if($a < $numero){ echo "El numero es mayor que $a";}
}
?>