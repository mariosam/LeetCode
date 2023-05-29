<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimizeMaximumOfArray {    

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function minimizeArrayValue($nums) {
        $sum = 0;
        $res = 0;

        for ( $i=0; $i < count($nums); $i++ ) {
            $sum += $nums[$i];
            $res = max($res, ($sum+$i)/($i+1));
        }
        
        return intval($res);
    }
}
