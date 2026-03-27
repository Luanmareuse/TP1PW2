<?php
$kg= $_POST['kg'];
$altura= $_POST['altura'];
$imc= $kg / ($altura * $altura);

if ($imc < 18.5){

echo "esta abaixo do peso ideal " . $imc;
}
else if ($imc > 18.6 and $imc < 25){
    echo "esta no peso ideal " . $imc;
}
else if ($imc > 25.1){
    echo "esta acima do peso ideal " . $imc;
}








?>