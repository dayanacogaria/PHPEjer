<?php
if (!empty($_POST['kilometros'])) {
    $k= $_POST['kilometros'];
    $li=1/16.4;
    $r=$li;
    $total=$r*$k;
    $total = round($total);
    printf("%.0f",$total)."litros de gasolina";
    echo $total." son el total de litros gastados";
}

?>