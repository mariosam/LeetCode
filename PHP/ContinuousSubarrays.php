<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class ContinuousSubarrays {    

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function continuousSubarrays($nums) {
        $ans = 0;
        $i = 0;
        $n = count($nums);
        $tm = [];

        for ($j = 0; $j < $n; $j++) {
            if (!isset($tm[$nums[$j]])) {
                $tm[$nums[$j]] = 0;
            }
            $tm[$nums[$j]]++;

            while (max(array_keys($tm)) - min(array_keys($tm)) > 2) {
                $tm[$nums[$i]]--;
                if ($tm[$nums[$i]] == 0) {
                    unset($tm[$nums[$i]]);
                }
                $i++;
            }

            $ans += $j - $i + 1;
        }

        return $ans;
    }
}
