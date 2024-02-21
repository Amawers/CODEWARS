<?php
function square_digits($num)
{
    $converted = (string) $num;
    $final_str = "";
    for($i = 0; $i < strlen($converted); $i++){
        $final_str .= $converted[$i] * $converted[$i];
    }
    return (int) $final_str;
}
square_digits(9119);
