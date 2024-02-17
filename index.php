<?php
function invert(array $a): array
{
    $reversed = [];
    for ($i = 0; $i < count($a); $i++) {
        array_push($reversed, $a[$i] * -1);
    }
    return $reversed;
}
$x = invert([1, -2]);
var_dump($x);
