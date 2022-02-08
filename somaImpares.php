<?php
function sumOdd($array) {
    $sum = 0;
    foreach ($array as $item) {
        if ($item % 2 != 0) {
            $sum += $item;
        }
    }
    return $sum;
}

$array = array(1, 2, 3, 4, 5);
$result = sumOdd($array);
echo $result;