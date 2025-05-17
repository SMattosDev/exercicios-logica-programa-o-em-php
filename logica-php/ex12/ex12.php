<?php

$valorHora = $_POST["valorHora"];
$horasTrabalhadas = $_POST["horasTrabalhadas"];

$salarioBruto = $valorHora * $horasTrabalhadas;

$ir = 0;
$percentualIR = 0;


if ($salarioBruto <= 1903.98) {
    $percentualIR = 0;
    $ir = 0;
} else if ($salarioBruto <= 2826.65) {
    $percentualIR = 7.5;
    $ir = $salarioBruto * 0.075;
} else if ($salarioBruto <= 3751.05) {
    $percentualIR = 15;
    $ir = $salarioBruto * 0.15;
} else if ($salarioBruto <= 4664.68) {
    $percentualIR = 22.5;
    $ir = $salarioBruto * 0.225;
} else {
    $percentualIR = 27.5;
    $ir = $salarioBruto * 0.275;
}


$sindicato = $salarioBruto * 0.03;
$fgts = $salarioBruto * 0.08;

$salarioLiquido = $salarioBruto - $ir - $sindicato;

echo "Salario Bruto: R$ $salarioBruto<br>";
echo "Desconto de IR ($percentualIR%): R$ $ir<br>";
echo "Desconto Sindicato (3%): R$ $sindicato<br>";
echo "Deposito FGTS (8%): R$ $fgts<br>";
echo "Salario Liquido: R$ $salarioLiquido";

?>