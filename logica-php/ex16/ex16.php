<?php
$a = 2;
$b = 4;
$c = -6;

if ($a == 0) {
    echo "O valor de 'a' não pode ser zero. Isso não é uma equação do 2º grau.";
    return;
}

$delta = $b * $b - 4 * $a * $c;

if ($delta < 0) {
    echo "A equação não possui raízes reais.";
} else if ($delta > 0) {
    // sqrt() calcula a raiz quadrada de um número (ex: sqrt(9) = 3)
    $r1 = (-$b + sqrt($delta)) / (2 * $a);
    $r2 = (-$b - sqrt($delta)) / (2 * $a);
    echo "A equação possui duas raízes reais: r1 = $r1 e r2 = $r2";
} else {
    $r = -$b / (2 * $a);
    echo "A equação possui uma raiz real: r = $r";
}
?>
