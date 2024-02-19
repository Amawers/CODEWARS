<?php
function getCount($str)
{
    $vowelsCount = 0;
    $split = str_split($str);

    foreach($split as $item){
        if($item == "a" || $item == "e" || $item == "i" || $item == "o" || $item == "u"){
            $vowelsCount++;
        }
    }

    return $vowelsCount;
}
getCount("abracadabra");