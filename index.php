<?php
function nbYear($p0, $percent, $aug, $p)
{
    $count = 0;
    while ($p0 < $p) {
        $p0 = $p0 + floor($p0 * ($percent / 100)) + $aug;
        $count++;
    }
    return $count;
}
nbYear(1500, 5, 100, 5000);
