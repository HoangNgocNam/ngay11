<?php
$numbers = [1,3,4,5,2,3,1,6,4,3,7,8,9,2,3,];
function display($numbers, $value){
    $count = 0;
   for ($i = 0; $i < count($numbers); $i++){
       if ($numbers[$i] === $value){
           $count++;
       }
   }
   return $count;
}

$value = 3;
foreach ($numbers as $value){
    echo $value . ",";
}
 echo "<br>";
echo $value . "xuat hien". display($numbers,$value) . "lan";