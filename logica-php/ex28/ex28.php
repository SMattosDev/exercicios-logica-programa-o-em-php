<?php

$carne = $_POST['carne'];
$kg = $_POST['quantidade'];
$cartao = $_POST['cartao'];

if ($carne == 'file') {
    $tipo = 'Filé Duplo';
    if ($kg <= 5) {
        $preco = 4.90;
    } else {
        $preco = 5.80;
    }
}

if ($carne == 'alcatra') {
    $tipo = 'Alcatra';
    if ($kg <= 5) {
        $preco = 5.90;
    } else {
        $preco = 6.80;
    }
}

if ($carne == 'picanha') {
    $tipo = 'Picanha';
    if ($kg <= 5) {
        $preco = 6.90;
    } else {
        $preco = 7.80;
    }
}

$total = $kg * $preco;

if ($cartao == 'sim') {
    $desconto = $total * 0.05;
} else {
    $desconto = 0;
}

$final = $total - $desconto;

echo "Tipo: $tipo<br>";
echo "Quantidade: $kg kg<br>";
echo "Preço por kg: R$ $preco<br>";
echo "Total: R$ $total<br>";
echo "Pagamento com cartão Tabajara: $cartao<br>";
echo "Desconto: R$ $desconto<br>";
echo "Valor a pagar: R$ $final";
?>