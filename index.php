<?php
function past($h, $m, $s)
{
    $ms = 0;
    $ms += $h * 60 * 60 * 1000;
    $ms += $m * 60 * 1000;
    $ms += $s * 1000;
    if ($ms > 0) {
        return $ms;
    }else{
        return 0;
    }
}
past(0, 1, 1);
