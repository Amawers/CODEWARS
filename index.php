<?php
function fake_bin(string $s)
{
    $final = "";
    for($i = 0; $i < strlen($s); $i++){
        if($s[$i] < 5){
            $final .= '0';
        }else{
            $final .= '1';
        }
    }
    return $final;
}
fake_bin('129748');
