<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$op = $_POST['operacao'];

if ($op == 1) {
    
    if ($num1 % 2 == 0) {
        echo "O número $num1 é par.<br>";
    } else {
        echo "O número $num1 é ímpar.<br>";
    }

    if ($num2 % 2 == 0) {
        echo "O número $num2 é par.<br>";
    } else {
        echo "O número $num2 é ímpar.<br>";
    }

} elseif ($op == 2) {
    
    if ($num1 >= 0) {
        echo "O número $num1 é positivo.<br>";
    } else {
        echo "O número $num1 é negativo.<br>";
    }

    if ($num2 >= 0) {
        echo "O número $num2 é positivo.<br>";
    } else {
        echo "O número $num2 é negativo.<br>";
    }

} elseif ($op == 3) {

    if ($num1 == round($num1)) {
        echo "O número $num1 é inteiro.<br>";
    } else {
        echo "O número $num1 é decimal.<br>";
    }

    if ($num2 == round($num2)) {
        echo "O número $num2 é inteiro.<br>";
    } else {
        echo "O número $num2 é decimal.<br>";
    }

} else {
    echo "Erro: operação inválida.";
}
?>
