<?php

$r1 = $_POST['r1'];
$r2 = $_POST['r2'];
$r3 = $_POST['r3'];
$r4 = $_POST['r4'];
$r5 = $_POST['r5'];

$contador = 0;


if ($r1 == "sim") $contador++;
if ($r2 == "sim") $contador++;
if ($r3 == "sim") $contador++;
if ($r4 == "sim") $contador++;
if ($r5 == "sim") $contador++;


if ($contador == 5) {
    echo "Assassino";
} elseif ($contador >= 3) {
    echo "Cúmplice";
} elseif ($contador == 2) {
    echo "Suspeita";
} else {
    echo "Inocente";
}
?>