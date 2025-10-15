<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class AdjacentIncreasingSubarraysDetectionII {    

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxIncreasingSubarrays($nums) {
        $ans = 0; $pre = 0; $cur = 0;
        $n = count($nums);

        for ($i = 0; $i < $n; ++$i) {
            ++$cur;
            if ($i == $n - 1 || $nums[$i] >= $nums[$i + 1]) {
                $ans = max($ans, max(intdiv($cur, 2), min($pre, $cur)));
                $pre = $cur;
                $cur = 0;
            }
        }
        return $ans;
    }

}
