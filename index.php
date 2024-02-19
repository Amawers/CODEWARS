<?php
function getMiddle($text)
{
    $split = str_split($text);
    $check = count($split);
    if($check % 2){
        $middle = floor($check / 2);
        return $split[$middle];
    }else{
        $first = ($check / 2) - 1;
        $second = $check / 2;

        return $split[$first] . $split[$second];
    }
}
getMiddle("test");
