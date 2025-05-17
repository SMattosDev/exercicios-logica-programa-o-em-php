<?php

$letra = $_POST["letra"];


if ($letra == "A" || $letra ==  "E" ||$letra ==  "I" ||$letra == "O" || $letra =="U") {
    echo "vogal";
} else {
    echo "consoante";
}
