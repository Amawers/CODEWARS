<?php
function basicOp($op, $val1, $val2)
{
  if($op == "+"){
    return $val1 + $val2;
  }else if($op == "-"){
    return $val1 - $val2;
  }else if($op == "*"){
    return $val1 * $val2;
  }else{
    return $val1 / $val2;
  }
}
basicOp ('+',5, 5);