<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>





<form action="ejercicio13.php" method="POST">
    Codigo Producto:<br><input type="text" name="codigo" id="codigo" value="0"><br/>
    Cantidad de Litros:<br><input type="text" name="litros" id="litros" value="0"><br/>
    Precio Por Litros:<br><input type="text" name="precio" id="precio" value="0"><br/>
    <input type="submit" value="Enviar"> <br>
</form>




<?php if(!empty($_GET['velocidad'])){
    echo  "La cantidad del recorrido es:".$_GET['velocidad'];
} ?>




</body>
</html>