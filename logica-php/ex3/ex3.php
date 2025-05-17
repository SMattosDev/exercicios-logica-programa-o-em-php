<?php

$numeroUm = $_POST["numeroUm"];


if ($numeroUm === "F") {
    echo "F - Feminino";
} else if ($numeroUm === "M") {
    echo "M - Masculino";
} else {
    echo "Sexo inválido";
}
