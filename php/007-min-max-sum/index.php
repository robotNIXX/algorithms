<?php
/**
 * Given five positive integers, find the minimum and maximum values that can be calculated
 * by summing exactly four of the five integers.
 * Then print the respective minimum and maximum values as a single line of two space-separated long integers.
 */

function miniMaxSum($arr) {
    // Write your code here
    sort($arr);
    $sumMin = array_sum($arr) - $arr[count($arr) - 1];
    $sumMax = array_sum($arr) - $arr[0];

    print "$sumMin $sumMax";
}