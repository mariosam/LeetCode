<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MaximumDifferenceBetweenAdjacentElementsInACircularArray {    

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxAdjacentDistance($nums) {
        $n = count($nums);
        $ans = abs($nums[0] - $nums[$n - 1]);

        for ($i = 1; $i < $n; $i++) {
            $ans = max($ans, abs($nums[$i] - $nums[$i - 1]));
        }

        return $ans;
    }
}
