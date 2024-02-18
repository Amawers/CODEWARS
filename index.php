<?php
function quarterOf($month)
{
    switch ($month) {
        case in_array($month, range(1, 3)):
            return 1;
        case in_array($month, range(4, 6)):
            return 2;
        case in_array($month, range(7, 9)):
            return 3;
        case in_array($month, range(10, 12)):
            return 4;
    }
}
$returned = quarterOf(11);
echo $returned;