<?php

function plusMinus($arr)
{
    $count = count($arr);
    $positive = 0;
    $negative = 0;
    $zero = 0;

    array_map(function ($a) use (&$positive, &$negative, &$zero) {
        if ($a > 0) {
            $positive++;
        }
        if ($a < 0) {
            $negative++;
        }
        if ($a === 0) {
            $zero++;
        }
    }, $arr);

    printf("%.6f\n", ($positive / $count));
    printf("%.6f\n", ($negative / $count));
    printf("%.6f\n", ($zero / $count));

}