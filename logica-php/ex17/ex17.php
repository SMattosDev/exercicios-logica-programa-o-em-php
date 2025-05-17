<?php
$ano = 2024;


if ($ano % 400 == 0) {
    echo "Esse ano é bissexto.";
} else if ($ano % 100 == 0) {
    echo "Esse ano não é bissexto.";
} else if ($ano % 4 == 0) {
    echo "Esse ano é bissexto.";
} else {
    echo "Esse ano não é bissexto.";
}
?>