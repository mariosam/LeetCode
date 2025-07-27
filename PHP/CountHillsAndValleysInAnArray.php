<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CountHillsAndValleysInAnArray {    

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function countHillValley($nums) {
        $left = $nums[0];
        $count = 0;
        $n = count($nums);

        for ($i = 1; $i < $n - 1; $i++) {
            if (($left < $nums[$i] && $nums[$i] > $nums[$i + 1]) ||
                ($left > $nums[$i] && $nums[$i] < $nums[$i + 1])) {
                $count++;
                $left = $nums[$i];
            }
        }
        return $count;
    }
}
