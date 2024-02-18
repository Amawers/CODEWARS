<?php
function smallestInteger($arr)
{
    return sort($arr) ? $arr[0] : null;
}
smallestInteger([34, 15, 88, 2]);
