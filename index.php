<?php
function maps($x)
{
  $arr = [];
  foreach($x as $item){
    array_push($arr, $item * 2);
  }
  return $arr;
}
maps([1, 2 ,3]);