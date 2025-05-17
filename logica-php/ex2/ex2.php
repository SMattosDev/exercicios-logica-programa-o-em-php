<?php

$numeroUm = $_POST["numeroUm"];


if ($numeroUm < 1) {
    echo "O número $numeroUm é negativo";
} else if ($numeroUm >= 1) {
    echo "O número $numeroUm é positivo";
}
