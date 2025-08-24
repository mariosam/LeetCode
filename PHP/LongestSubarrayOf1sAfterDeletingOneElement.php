<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class LongestSubarrayOf1sAfterDeletingOneElement {    

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function longestSubarray($nums) {
        $n = count($nums);
        $left = array_fill(0, $n, 0);
        $right = array_fill(0, $n, 0);

        for ($i = 1; $i < $n; $i++) {
            if ($nums[$i - 1] == 1) {
                $left[$i] = $left[$i - 1] + 1;
            }
        }

        for ($i = $n - 2; $i >= 0; $i--) {
            if ($nums[$i + 1] == 1) {
                $right[$i] = $right[$i + 1] + 1;
            }
        }

        $ans = 0;
        for ($i = 0; $i < $n; $i++) {
            $ans = max($ans, $left[$i] + $right[$i]);
        }

        return $ans;
    }

}
