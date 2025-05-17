<?php

$numeroUm = $_POST["numeroUm"];
$numeroDois = $_POST["numeroDois"];

if ($numeroUm > $numeroDois) {
    echo "O número um é maior";
} else if ($numeroDois > $numeroUm) {
    echo "O número dois é maior";
}
