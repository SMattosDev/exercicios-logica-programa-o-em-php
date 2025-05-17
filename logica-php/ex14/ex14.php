<?php

$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];

$media = ($nota1 + $nota2) / 2;


echo "Sua primeira nota: $nota1<br>";
echo "Sua segunda nota: $nota2<br>";
echo "Sua média: $media<br>";


if ($media >= 0.0 && $media <= 4.0) {
    echo "Nota: E - REPROVADO";
} else if ($media > 4.0 && $media <= 6.0) {
    echo "Nota: D - REPROVADO";
} else if ($media > 6.0 && $media <= 7.5) {
    echo "Nota: C - APROVADO";
} else if ($media > 7.5 && $media <= 9.0) {
    echo "Nota: B - APROVADO";
} else if ($media > 9.0 && $media <= 10.0) {
    echo "Nota: A - APROVADO";
} else {
    echo "Notas inválidas";
}
?>