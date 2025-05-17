<?php
$letra = $_POST["letra"];

if ($letra == "M" || $letra == "m") {
    echo "Bom dia!";
} else if ($letra == "V" || $letra == "v") {
    echo "Boa tarde!";
} else if ($letra == "N" || $letra == "n") {
    echo "Boa noite!";
} else {
    echo "Valor inválido!";
}
?>
