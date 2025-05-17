<?php
$salario = $_POST["salario"];

echo "Salário antes do reajuste: R$ $salario<br>";

$novoSalario = 0;
$aumento = 0;

if ($salario <= 280.00) {
    $aumento = $salario * 0.20;
    echo "O percentual de aumento aplicado é 20%<br>";
} else if ($salario > 280.00 && $salario <= 700.00) {
    $aumento = $salario * 0.15;
    echo "O percentual de aumento aplicado é 15%<br>";
} else if ($salario > 700.00 && $salario <= 1500.00) {
    $aumento = $salario * 0.10;
    echo "O percentual de aumento aplicado é 10%<br>";
} else {
    $aumento = $salario * 0.05;
    echo "O percentual de aumento aplicado é 5%<br>";
}

$novoSalario = $salario + $aumento;

echo "O valor do aumento é: R$ $aumento<br>";
echo "O novo salário, após o aumento, é: R$ $novoSalario";
?>