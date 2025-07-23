<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MaximumErasureValue {    

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maximumUniqueSubarray($nums) {
        $l = 0;
        $r = 0;
        $cnt = [];
        $sum = 0;
        $ans = 0;

        while ($r < count($nums)) {
            $in = $nums[$r];
            $sum += $in;
            $r++;
            if (!isset($cnt[$in])) $cnt[$in] = 0;
            $cnt[$in]++;

            while ($cnt[$in] > 1) {
                $out = $nums[$l];
                $l++;
                $sum -= $out;
                $cnt[$out]--;
            }

            $ans = max($ans, $sum);
        }

        return $ans;
    }
}
