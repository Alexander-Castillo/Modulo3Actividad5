<?php
function bubbleSortDesc(&$arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] < $arr[$j + 1]) {
                // Intercambia los elementos
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
}

// Lista de números con duplicados y valores negativos
$numbers = [3, -2, 5, -2, 1, 4, 0, -1, 5];
echo "Lista original: ";
print_r($numbers);

bubbleSortDesc($numbers);

echo "Lista ordenada (descendente): ";
print_r($numbers);
?>