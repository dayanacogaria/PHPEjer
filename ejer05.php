
<!DOCTYPE html>

<html >
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<head>
    <title></title>
</head>


    <?php
    echo "<h3></h3>
<table >
<tr>
<td></td>
<td>Edad</td>
<td>Altura</td>
</tr>
";
    echo "<form method='POST'>";
    tabla('Primer', 'PrEd1','PrAn1');
    tabla('Segundo', 'PrEd2','PrAn2');
    tabla('Tercero', 'PrEd3','PrAn3');
    tabla('Cuarto', 'PrEd4','PrAn4');
    tabla('Quinto', 'PrEd5','PrAn5');
    function tabla($nombre , $id , $id2){
        echo "   
    <tr>
    <td>$nombre Alumno</td>
    <td><input type='number' name='$id' required/></td>
    <td><input type='text' name='$id2' required/></td>
    </tr>
          ";


    }
    echo "</table>
<br>
<input name='suma' type='submit' value='Enviar Datos' />
<br><br>";
    ?>

    </form>

    <?php
    function suma($a,$b,$c,$d,$e){

        $suma = $_POST[$a];
        $suma += $_POST[$b];
        $suma += $_POST[$c];
        $suma += $_POST[$d];
        $suma += $_POST[$e];
        return $suma;
    }
    function si($a,$ot,$c,$d,$e, $con){

        $b= 0;

        if($_POST[$a] >= $con)$b++;
        if($_POST[$ot] >= $con)$b++;
        if($_POST[$c] >= $con)$b++;
        if($_POST[$d] >= $con)$b++;
        if($_POST[$e] >= $con)$b++;

        return $b;
    }
    if(isset($_POST['suma'] )){
        $a = suma('PrEd1','PrEd2','PrEd3','PrEd4','PrEd5');
        $d = suma('PrAn1','PrAn2','PrAn3','PrAn4','PrAn5');
        $b = 0;
        $c = 0;
        $b = si('PrEd1','PrEd2','PrEd3','PrEd4','PrEd5' ,18);
        $c = si('PrAn1','PrAn2','PrAn3','PrAn4','PrAn5',1.75);
        echo" 
  La media de las edades es ". $a/5 ." <br>
  La media de las alturas es ". $d/5 ." <br>
  Hay $b alumnos mayores de 18 años <br>
  Hay $c que miden mas de 1.75
";
    }
    ?>


</body>

</html>