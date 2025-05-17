<?php
$kgMorango = $_POST['morango'];
$kgMaca = $_POST['maca'];

if ($kgMorango <= 5) {
    $precoMorango = 2.50;
} else {
    $precoMorango = 2.20;
}

if ($kgMaca <= 5) {
    $precoMaca = 1.80;
} else {
    $precoMaca = 1.50;
}

$totalMorango = $kgMorango * $precoMorango;
$totalMaca = $kgMaca * $precoMaca;

$totalKg = $kgMorango + $kgMaca;
$totalCompra = $totalMorango + $totalMaca;

if ($totalKg > 8 || $totalCompra > 25) {
    $desconto = $totalCompra * 0.10;
    $totalCompra = $totalCompra - $desconto;
}

echo "Total a pagar: R$ " . $totalCompra;
?>