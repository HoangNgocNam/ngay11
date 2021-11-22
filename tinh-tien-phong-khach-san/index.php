<?php
$matrix = [
    [0, 1, 1, 2],
    [0, 5, 0, 0],
    [2, 0, 3, 3]
];

function sum($matrix){
    $sum = 0;
    for ($i = 0; $i < count($matrix); $i++){
        for ($j = 0; $j < count($matrix[$i]); $j++){
            if ($matrix[$i][$j] == 0)
                continue;
            if ($i > 0)
                if ($matrix[$i - 1][$j] == 0)
                    continue;
                    $sum += $matrix[$i][$j];
        }
    }
    return $sum;
}


echo sum($matrix);