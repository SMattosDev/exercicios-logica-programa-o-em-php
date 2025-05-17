<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$num3 = $_POST["num3"];

$maior = 0;
$menor = 0;


if ($num1 > $num2 && $num1 > $num3) {
    $maior = $num1;
} else if ($num2 > $num1 && $num2 > $num3) {
    $maior = $num2;
} else {
    $maior = $num3;
}


if ($num1 < $num2 && $num1 < $num3) {
    $menor = $num1;
} else if ($num2 < $num1 && $num2 < $num3) {
    $menor = $num2;
} else {
    $menor = $num3;
}

echo "O número maior é: $maior e o número menor é: $menor";
?>
