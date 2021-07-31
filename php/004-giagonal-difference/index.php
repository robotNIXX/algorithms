<?php

function diagonalDifference($arr)
{
    $count = count($arr);
    $sumA = 0;
    $sumB = 0;
    for ($index = 0; $index < $count; $index++) {
        $sumA += $arr[$index][$index];
    }
    $start = 0;
    for ($index = ($count - 1); $index >= 0; $index--) {
        $sumB += $arr[$index][$start];
        $start++;
    }

    return abs($sumA - $sumB);
}