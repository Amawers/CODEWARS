<?php
function enough($cap, $on, $wait)
{
    return $on + $wait <= $cap ? 0 : ($on + $wait) - $cap;
}
enough(10, 5, 5);