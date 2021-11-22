<?php
function minNumber($arr){

    $min = $arr[0];

    for ($i = 0; $i < count($arr); $i++) {
        if ($min > $arr[$i]) {
            $min = $arr[$i];
        }
    }
    return $min;
}

function maxNumber($arr){

    $max = $arr[0];

    for ($i = 0; $i < count($arr); $i++){
        if ($max < $arr[$i]){
            $max = $arr[$i];
        }
    }
    return $max;
}

$array = [1,5,6,7,9,23,55,66,22,-1,-7,98];

foreach ($array as $num){
    echo $num . " , " ;
}

$minValue = minNumber($array);
echo "<br>";
echo "gia tri min la: " . $minValue;

echo "<br>";

$maxvalue = maxNumber($array);
echo "gia tri max la: " . $maxvalue;