<?php

$Nota1=$_POST['Nota1'];
$Nota2=$_POST['Nota2'];
$Nota3=$_POST['Nota3'];

$Resultado = ($Nota1 + $Nota2 + $Nota3) / 3;

if ($Resultado <= 4){
echo "Nota I";
}

else if ($Resultado >= 4.1 && $Resultado <= 6.9){
echo "Nota R";
}

else if ($Resultado >= 7 && $Resultado <= 9){
echo "Nota B";
}

else if ($Resultado >= 10){
echo "Nota MB";
}
?>