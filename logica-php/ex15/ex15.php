<?php
$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];


if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
    echo "Os valores podem formar um triângulo.<br>";

    if ($a == $b && $b == $c) {
        echo "Triângulo equilátero.";
    } else if ($a == $b || $b == $c || $a == $c) {
        echo "Triângulo isósceles.";
    } else {
        echo "Triângulo escaleno.";
    }
} else {
    echo "Os valores não formam um triângulo.";
}
?>