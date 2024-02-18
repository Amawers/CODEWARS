<?php
function reverseSeq($n)
{   
    $loop = $n;
    $arr = [];
    for ($i = 0; $i < $loop; $i++) {
        array_push($arr, $n);
        $n--;
    }
    return $arr;
};
reverseSeq(5);
