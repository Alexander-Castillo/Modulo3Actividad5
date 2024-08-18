<?php
function mergeSort(&$arr) {
    if (count($arr) <= 1) {
        return $arr;
    }

    $middle = count($arr) / 2;
    $left = array_slice($arr, 0, $middle);
    $right = array_slice($arr, $middle);

    $left = mergeSort($left);
    $right = mergeSort($right);

    return merge($left, $right);
}

function merge($left, $right) {
    $result = [];
    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] < $right[0]) {
            array_push($result, array_shift($left));
        } else {
            array_push($result, array_shift($right));
        }
    }

    array_splice($result, count($result), 0, $left);
    array_splice($result, count($result), 0, $right);

    return $result;
}

// Lista de palabras
$words = ["banana", "manzana", "naranja", "mango", "uvas", "limon"];
echo "Lista original: ";
print_r($words);

$words = mergeSort($words);

echo "Lista ordenada (alfabéticamente): ";
print_r($words);
?>