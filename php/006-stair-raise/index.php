<?php
function staircase($n) {
    for ($index = ($n - 1); $index >= 0; $index--) {
        $list = str_pad("", $n, "#");
        for ($sIndex = 0; $sIndex < $index; $sIndex++) {
            $list[$sIndex] = ' ';
        }
        print($list . "\n");
    }
}