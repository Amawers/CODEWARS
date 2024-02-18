<?php
function find_average($array): float
{
    if(!$array){
        return 0;
    }
    $total = null;
    for ($i = 0; $i < count($array); $i++) {
        $total += $array[$i];
    }
    $average = $total / count($array);
    return $average;
}
$returned = find_average([31, 35, 24]);
echo $returned;
