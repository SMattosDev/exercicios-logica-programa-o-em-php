<?php

$num = $_POST['num'];
$arredondado = round($num);

if ($num == $arredondado) {
    echo "O número é inteiro.";
} else {
    echo "O número é decimal.";
}
?>
