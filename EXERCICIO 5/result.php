<?php
$SalarioBruto= $_POST['SalarioBruto'];
$Salario2Minimo= 3242;

$PrimeiroSalarioLiquido= $SalarioBruto - ($SalarioBruto * 8 / 100);
$SegundoSalarioLiquido= $SalarioBruto - ($SalarioBruto * 10 / 100);

if ($SalarioBruto <= $Salario2Minimo){
echo "Seu salario e " . $PrimeiroSalarioLiquido;
}

else if ($SalarioBruto > $Salario2Minimo){
echo "Seu salario e " . $SegundoSalarioLiquido;
}
?>