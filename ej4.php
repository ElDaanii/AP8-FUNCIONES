<?php
 
 $empleados = [
    'Juan'=>[
       'horas' => 40,
       'tarifa' => 15
    ],
    'Perico'=>[
       'horas' => 20,
       'tarifa' => 25
    ],
    'Andrés'=>[
       'horas' => 45
    ],
];

function calculaSalario($empleados) {
    foreach ( $empleados as $empleado ) {
    if ($empleado["horas"] > 40) {
        $mult = $empleado["tarifa"] * 0.25;
        $sum = $empleado["tarifa"] + $mult;
        $sala = $sum * $empleado["horas"];
        }

        elseif ($empleado["horas"] <=40 ) {
            $sala = $empleado["horas"] * $empleado["tarifa"];
        }
        elseif ($empleado["tarifa"] == "") {
            $sala = 10;
    }
    return $sala ;
}
}
$horas_sem = calculaSalario($empleados);
echo "$horas_sem";


?>