<?php
function positive_sum($arr)
{
    $solve = [];
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] > 0) {
            array_push($solve, $arr[$i]);
        }
    }
    return array_sum($solve);
}
positive_sum([1, 2, 3, 4, 5]);
