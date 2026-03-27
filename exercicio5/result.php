<?php
$salariobruto= $_POST['salario'];
$salariominimo2= 3242;

$salarioliquido1=$salariobruto * 8 / 100;
$salarioliquido2=$salariobruto * 10 / 100;

$desconto1= $salariobruto - $salarioliquido1;
$desconto2= $salariobruto - $salarioliquido2;

if($salariobruto <= $salariominimo2){
    echo "seu salario sera " . $desconto1;
}
else if ($salariobruto > $salariominimo2){
    echo "seu salario sera " . $desconto2;
}
?>