<?php
function zeroFuel($distanceToPump, $mpg, $fuelLeft)
{
    return $mpg * $fuelLeft >= $distanceToPump ? true : false;
}
zeroFuel(50, 25, 2);