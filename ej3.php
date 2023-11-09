<?php
function dameNumero() {
    $numerosUnicos = array();
    
    while (count($numerosUnicos) < 6) {
        $ran = random_int(1, 49);
        
        if (!in_array($ran, $numerosUnicos)) {
            $numerosUnicos[] = $ran;
        }
    }
    
    return $numerosUnicos;
}

$numeros = dameNumero();

echo "Los 6 números de la loteria son: " . implode(", ", $numeros);
?>
