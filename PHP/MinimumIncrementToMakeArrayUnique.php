<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimumIncrementToMakeArrayUnique {    

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function minIncrementForUnique($nums) {
        sort($nums);
        $ans = 0;
        for ($i = 1; $i < count($nums); ++$i) {
            if ($nums[$i] <= $nums[$i - 1]) {
                $d = $nums[$i - 1] - $nums[$i] + 1;
                $nums[$i] += $d;
                $ans += $d;
            }
        }
        return $ans;
    }
}
