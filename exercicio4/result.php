<?php
$nota1= $_POST['nota1'];
$nota2= $_POST['nota2'];
$nota3= $_POST['nota3'];
$resultado=($nota1 + $nota2 + $nota3) / 3;

if($resultado <= 4){
    echo"nota I";
}
else if($resultado >4.1 && $resultado <=6){
    echo"nota R";
}
else if($resultado >6.1 && $resultado <=8){
    echo"nota B";
}
else if($resultado > 8.1){
    echo"nota MB";
}
?>