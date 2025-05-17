<?php
$valor = $_POST['valor'];

if ($valor < 10 || $valor > 600) {
    echo "O valor inserido não é válido.";
} else {
    $notas100 = 0;
    $notas50 = 0;
    $notas10 = 0;
    $notas5 = 0;
    $notas1 = 0;

    $notas100 = (int)($valor / 100);
    $valor = $valor % 100;

    $notas50 = (int)($valor / 50);
    $valor = $valor % 50;

    $notas10 = (int)($valor / 10);
    $valor = $valor % 10;

    $notas5 = (int)($valor / 5);
    $valor = $valor % 5;

    $notas1 = (int)($valor / 1);
    $valor = $valor % 1;

    if ($notas100 > 0) {
        echo "$notas100 nota(s) de 100 reais<br>";
    }
    if ($notas50 > 0) {
        echo "$notas50 nota(s) de 50 reais<br>";
    }
    if ($notas10 > 0) {
        echo "$notas10 nota(s) de 10 reais<br>";
    }
    if ($notas5 > 0) {
        echo "$notas5 nota(s) de 5 reais<br>";
    }
    if ($notas1 > 0) {
        echo "$notas1 nota(s) de 1 real<br>";
    }
}
?>
