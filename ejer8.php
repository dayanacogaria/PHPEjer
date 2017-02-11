<form method='POST' >
    Ingrese las millas a convertir  :
    <input name = 'num' type='text'/>  <input name='en' type='submit' value='Enviar Numero' />
</form>

<?php
function convertir($num){
    $num2 = number_format($num, 3, '.', '');
    return $num2;
}
if(isset($_REQUEST['en'])){

    $millas = $_POST['num'];

    $km =  $millas / 0.6214 ;
    $metros = $km * 1000;
    $cm = $metros * 100;
    $mm = $cm * 10;
    $yarda = $millas / 1760;
    $pulgada = $yarda * 36;
    $pie = $yarda * 3;


    $km2 = convertir($km);
    $metros2 = convertir($metros);
    $cm2 = convertir($cm);
    $mm2 = convertir($mm);
    $yarda2 = convertir($yarda);
    $pulgada2 = convertir($pulgada);
    $pie2 = convertir($pie);



    echo "Hay en $millas millas: <br><br>";

    echo "Kilometros ". $km2.   "<br>Metros ".$metros2  .  "<br>Centimetros ".$cm2 . "<br>Milimetros ".$mm2 .  "<br>Yardas ".$yarda2."<br>Pulgadas ".$pulgada2.
        "<br>Pies ".$pie2 ;}   ?>