<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MaximumDifferenceBetweenIncreasingElements {    

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maximumDifference($nums) {
        $ans = -1;
        $mn = $nums[0];

        for ($i = 1; $i < count($nums); $i++) {
            if ($nums[$i] > $mn) {
                $ans = max($ans, $nums[$i] - $mn);
            }
            $mn = min($mn, $nums[$i]);
        }

        return $ans;
    }
}
