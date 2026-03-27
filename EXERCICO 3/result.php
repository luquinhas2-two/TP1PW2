<?php
$Real=$_POST['Real'];
$Dolar= $Real * 5.24;
$Euro= $Real * 6.04;
$Libra = $Real * 6.99;

echo "Dolar: " . $Dolar . "<br> euro: " . $Euro .  "<br> Libra " . $Libra;

?>