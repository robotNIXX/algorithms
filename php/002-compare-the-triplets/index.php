<?php

function compareTriplets($a, $b)
{
    $ratings = [0, 0];
    array_map(function($a, $b) use (&$ratings) {
        $ratings[0] += $a > $b ? 1 : 0;
        $ratings[1] += $a < $b ? 1 : 0;
    }, $a, $b);

    return $ratings;
}