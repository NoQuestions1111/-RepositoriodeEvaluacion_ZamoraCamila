<?php

$empleados = [
    ['nombre' => 'Harry', 'sueldo' => 3000],
    ['nombre' => 'Gustav', 'sueldo' => 2500],
    ['nombre' => 'Bensone', 'sueldo' => 4000],
    ['nombre' => 'Mishaal', 'sueldo' => 3500],
    ['nombre' => 'Jessie', 'sueldo' => 4500]
];


usort($empleados, function($a, $b) {
    return $a['sueldo'] <=> $b['sueldo'];
});


echo "Empleados ordenados por sueldo:<br>";
foreach ($empleados as $empleado) {
    echo $empleado['nombre'] . " - Sueldo: $" . $empleado['sueldo'] . "<br>";
}


array_push($empleados, ['nombre' => 'Ana', 'sueldo' => 3200]);
array_push($empleados, ['nombre' => 'Alex', 'sueldo' => 2800]);

echo "Empleados después de agregar nuevos:<br>";
foreach ($empleados as $empleado) {
    echo $empleado['nombre'] . " - Sueldo: $" . $empleado['sueldo'] . "<br>";
}
?>
