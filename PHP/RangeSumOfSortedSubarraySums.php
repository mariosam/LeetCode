<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class RangeSumOfSortedSubarraySums {    

    /**
     * @param Integer[] $nums
     * @param Integer $n
     * @param Integer $left
     * @param Integer $right
     * @return Integer
     */
    function rangeSum($nums, $n, $left, $right) {
        $arr = [];
        $k = 0;
        for ($i = 0; $i < count($nums); $i++) {
            $arr[$k++] = $nums[$i];
            $last = $nums[$i];
            for ($j = $i + 1; $j < count($nums); $j++) {
                $arr[$k] = ($last + $nums[$j]);
                $last = $arr[$k];
                $k++;
            }        
        }

        sort($arr);
        $sum = 0;
        $mod = pow(10, 9) + 7;

        for ($i = $left - 1; $i <= $right - 1; $i++) {
            $sum = ($sum + $arr[$i]) % $mod;
        }
        
        return $sum;
    }

}
