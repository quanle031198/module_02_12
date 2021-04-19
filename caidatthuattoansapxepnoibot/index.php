<?php
function bubbleSort($list)
{
    for ($i = 0; $i < count($list); $i++) {
        for ($j = 0; $j < count($list) - 1 ; $j++) {
            if ($list[$j] > $list[$j + 1]) {
                $temp = $list[$j + 1];
                $list[$j + 1] = $list[$j];
                $list[$j] = $temp;
            }
        }
    }
    for ($i = 0; $i < count($list); $i++) {
        echo $list[$i] . " ";
    }
}
$arr = [1, 13, 7, 6, 5, -4, 3, 2, -1, 23, 2, 1];
bubbleSort($arr);