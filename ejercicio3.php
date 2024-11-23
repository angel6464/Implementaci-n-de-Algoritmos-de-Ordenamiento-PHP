<?php
// Función para ordenar la lista utilizando Insertion Sort
function insertionSort(&$array) {
    $n = count($array);
    for ($i = 1; $i < $n; $i++) {
        $key = $array[$i]; // Elemento actual a insertar
        $j = $i - 1;

        // Mueve los elementos mayores que el actual una posición adelante
        while ($j >= 0 && strcasecmp($array[$j], $key) > 0) {
            $array[$j + 1] = $array[$j];
            $j--;
        }

        // Inserta el elemento en su posición correcta
        $array[$j + 1] = $key;
    }
}

// Lista inicial de nombres
$names = ["Carlos", "ana", "Beatriz", "José", "María", "andrés", "Zara"];

// Mostrar lista antes de ordenar
echo "Lista datos antes de ordenar:\n";
print_r($names);

// Ordena la lista
insertionSort($names);

// Muestra lista después de ordenar
echo "Lista después de ordenar:\n";
print_r($names);
?>
