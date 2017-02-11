<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>


<form method='POST'>

    Ingrese un numero entre 0 y 9999: <input name = 'num'
                               type='number' min='1' max ='9999' >

    <br> <input type='submit' value='Envie el numero'/>

</form>

<?php


if(isset($_REQUEST['num'])){


    $a =  $_POST['num'];




    echo "<br>Tu numero al reves es ".strrev($a);
}

?>
</body>
</html>