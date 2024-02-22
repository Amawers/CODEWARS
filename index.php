<?php
function countsheep($num)
{
    $str = "";
    if($num > 0){
        for($i = 1; $i < $num + 1; $i++){
            $str .= "$i sheep...";
        }
    }
    return $str;
}
countsheep(2);
