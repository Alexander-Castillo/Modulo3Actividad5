<?php
function insertionSort(&$arr) {
    $n = count($arr);
    for ($i = 1; $i < $n; $i++) {
        $key = $arr[$i];
        $j = $i - 1;

        while ($j >= 0 && $arr[$j] > $key) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $key;
    }
}

// Lista de nombres
$names = ["Juan", "Ana", "Pedro", "Carlos", "Luisa", "María"];
echo "Lista original: ";
print_r($names);

insertionSort($names);

echo "Lista ordenada (alfabéticamente): ";
print_r($names);
?>
