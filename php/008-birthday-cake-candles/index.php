<?php
    
    /**
     * You are in charge of the cake for a child's birthday. You have decided the cake will have one candle
     * for each year of their total age. They will only be able to blow out the tallest of the candles.
     * Count how many candles are tallest.
     */
    
    function birthdayCakeCandles($candles) {
        rsort($candles);
        $tallest[$candles[0]] = 0;
    
        foreach ($candles as $key => $candle) {
            if ($candle == $candles[0]) {
                $tallest[$candles[0]]++;
            }
        }
        
        return $tallest[$candles[0]];
    }