<?php
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];

$soma = ($nota1 + $nota2) / 2;

if ($soma == 10) {
    echo "Aprovado com distinção";
} else if ($soma >= 7) {
    echo "Aprovado";
} else {
    echo "Reprovado";
}
?>
