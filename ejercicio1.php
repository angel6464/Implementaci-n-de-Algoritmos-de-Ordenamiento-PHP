<?php
// Función para ordenar la lista utilizando Bubble Sort
function bubbleSortDesc(&$array) {
    $n = count($array);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($array[$j] < $array[$j + 1]) { // Compara para ordenAR descendente
                // Aqui intercambiamos
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
}

// eejemplo de como funcionaria
$list = [3, -1, 7, 4, -5, 3, 0, 9, -2];

// Mostramos la lista antes 
echo "Lista antes de ordenar:\n";
print_r($list);
echo "<br>";
// Ordena la lista
bubbleSortDesc($list);

// Mostramos la  lista después de ordenar
echo "Lista después de ordenar:\n";
print_r($list);
?>