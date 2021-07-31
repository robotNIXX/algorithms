<?php
    function timeConversion($s)
    {
        $pm = strpos($s, 'PM') > 0;
        $s = substr($s, 0, 8);
        $time = explode(":", $s);
        
        if ($pm) {
            $time[0] = intval($time[0]) < 12 ? intval($time[0]) + 12 : $time[0];
        } else {
            if (intval($time[0]) === 12) {
                $time[0] = "00";
            }
        }
        
        
        return implode(":", $time);
    }