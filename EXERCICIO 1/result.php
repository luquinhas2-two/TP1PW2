<?php

$peso = $_POST['peso'];
$altura = $_POST['altura'];

$imc = $peso / ( $altura * $altura);

if ($imc < 18.5){
echo "voce esta magro " . $imc;

}
else if ($imc >= 18.6 && $imc <25){
echo "voce esta bem " . $imc;

}

else if ($imc >= 25.1){
echo "voce esta gordo " . $imc;
}
?>