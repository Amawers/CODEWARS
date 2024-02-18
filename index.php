<?php
function abbrevName($name)
{
    $arrStr = explode(" ", $name);
    $fName = str_split($arrStr[0]);
    $lName = str_split($arrStr[1]);

    $final = strtoupper($fName[0]) . "." . strtoupper($lName[0]);
    return $final;
}
abbrevName("Sam Harris");
