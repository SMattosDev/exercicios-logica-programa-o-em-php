<?php
$litros = $_POST['litros'];
$tipo = $_POST['tipo'];

$a = 3.90;
$g = 5.50;
$desconto = 0;

if ($tipo == "a") {
    $preco = $a;
    if ($litros <= 20) {
        $desconto = 0.03 * $litros * $preco;
    } else {
        $desconto = 0.05 * $litros * $preco;
    }
} elseif ($tipo == "g") {
    $preco = $g;
    if ($litros <= 20) {
        $desconto = 0.04 * $litros * $preco;
    } else {
        $desconto = 0.06 * $litros * $preco;
    }
} else {
    echo "Tipo de combustível inválido!";
   
}

$total = $litros * $preco - $desconto;

echo "O valor a ser pago é R$ $total";
?>
