<?php
// Función Merge Sort
function mergeSort($array) {
    if (count($array) <= 1) {
        return $array; // Si la lista tiene un solo elemento ya está ordenada
    }

    // Divide el array en dos mitades
    $middle = floor(count($array) / 2);
    $left = array_slice($array, 0, $middle);
    $right = array_slice($array, $middle);

    // Ordena las mitades recursivamente
    $left = mergeSort($left);
    $right = mergeSort($right);

    // Combina las mitades ordenadas
    return merge($left, $right);
}

// Función para combinar dos listas ordenadas
function merge($left, $right) {
    $result = [];
    while (count($left) > 0 && count($right) > 0) {
        if (strcasecmp($left[0], $right[0]) <= 0) {
            $result[] = array_shift($left);
        } else {
            $result[] = array_shift($right);
        }
    }

    // Agrega los elementos restantes
    while (count($left) > 0) {
        $result[] = array_shift($left);
    }
    while (count($right) > 0) {
        $result[] = array_shift($right);
    }

    return $result;
}

// Lista inicial de palabras
$words = ["manzana", "Pera", "banana", "uva", "kiwi", "cereza", "limón"];
echo "<br>";
// Mostrar lista antes de ordenar
echo "Lista antes de ordenar:\n";
print_r($words);
echo "<br>";
// Ordenar la lista
$sortedWords = mergeSort($words);

// Muestra lista después de ordenar
echo "Lista después de ordenar:\n";
print_r($sortedWords);
?>
