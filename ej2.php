<?php

$ran = random_int(1, 10);

function numRomano($ran) {
    $result = "";

    if ($ran == 1) {
        $result = "I";
    } elseif ($ran == 2) {
        $result = "II";
    } elseif ($ran == 3) {
        $result = "III";
    } elseif ($ran == 4) {
        $result = "IV";
    } elseif ($ran == 5) {
        $result = "V";
    } elseif ($ran == 6) {
        $result = "VI";
    } elseif ($ran == 7) {
        $result = "VII";
    } elseif ($ran == 8) {
        $result = "VIII";
    } elseif ($ran == 9) {
        $result = "IX";
    } elseif ($ran == 10) {
        $result = "X";
    } else {
        $result = "Número fuera de rango";
    }

    return $result;
}

$resultado = numRomano($ran);

echo "El número $ran se transforma en $resultado";
?>
