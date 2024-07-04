<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimumDifferenceBetweenLargestAndSmallestValueInThreeMoves {    

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function minDifference($nums) {
        $n = count($nums);
        if ($n < 5) {
            return 0;
        }
        sort($nums);
        $ans = PHP_INT_MAX;
        for ($l = 0; $l <= 3; $l++) {
            $r = 3 - $l;
            $ans = min($ans, $nums[$n - 1 - $r] - $nums[$l]);
        }
        return $ans;
    }
}
