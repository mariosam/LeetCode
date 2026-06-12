<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class LeftAndRightSumDifferences {    

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function leftRightDifference($nums) {
        $l = 0;
        $r = array_sum($nums);
        $n = count($nums);
        $ans = array_fill(0, $n, 0);

        for ($i = 0; $i < $n; $i++) {
            $x = $nums[$i];
            $r -= $x;
            $ans[$i] = abs($l - $r);
            $l += $x;
        }
        return $ans;
    }

}
