<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimumScoreByChangingTwoElements {    

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function minimizeSum($nums) {
        sort($nums);
        $n = count($nums);
        $highOfChangingTwoMins = $nums[$n - 1] - $nums[2];
        $highOfChangingTwoMaxs = $nums[$n - 3] - $nums[0];
        $highOfChangingMinAndMax = $nums[$n - 2] - $nums[1];

        return min(
            $highOfChangingTwoMins,
            $highOfChangingTwoMaxs,
            $highOfChangingMinAndMax
        );
    }
}
