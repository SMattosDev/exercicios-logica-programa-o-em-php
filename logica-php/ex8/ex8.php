<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$num3 = $_POST["num3"];


if ($num1 < $num2 && $num1 < $num3) {
     echo"Você deve comprar o produto de R$: $num1. Porque é o mais barato.";
} else if ($num2 < $num1 && $num2 < $num3) {
     echo"Você deve comprar o produto de R$: $num2. Porque é o mais barato.";
} else {
    echo"Você deve comprar o produto de R$: $num3. Porque é o mais barato.";
}

?>