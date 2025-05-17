<?php

$numero = $_POST["numero"];

if ($numero >= 1000 || $numero < 0) {
    echo "Por favor, insira um número menor que 1000 e maior ou igual a 0.";
} else {
    // floor() arredonda o valor para baixo, pegando apenas a parte inteira
    $centenas = floor($numero / 100);
    $dezenas = floor(($numero % 100) / 10);
    $unidades = $numero % 10;

    $resultado = "";

    
    if ($centenas > 0) {
        $resultado .= $centenas . " centena";
        if ($centenas > 1) {
            $resultado .= "s";
        }
    }

    if ($dezenas > 0) {
        if ($resultado != "") {
            $resultado .= ", ";
        }
        $resultado .= $dezenas . " dezena";
        if ($dezenas > 1) {
            $resultado .= "s";
        }
    }

    if ($unidades > 0) {
        if ($resultado != "") {
            $resultado .= " e ";
        }
        $resultado .= $unidades . " unidade";
        if ($unidades > 1) {
            $resultado .= "s";
        }
    }

    echo $resultado;
}
?>