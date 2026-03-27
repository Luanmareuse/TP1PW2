<?php
$real= $_POST['real'];
$dolar= 5.24;
$euro= 6.04;
$libra= 7.02;
$valordolar= $real * $dolar;
$valoreuro= $real * $euro;
$valorlibra= $real * $libra;

echo "valor do dolar " . $valordolar;
echo "<br>valor do euro " . $valoreuro;
echo "<br>valor da libra " . $valorlibra;
?>