<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class JumpGameIX {    

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function maxValue($nums) {
        $n = count($nums);
        if ($n == 0) {
            return [];
        }
        $res = array_fill(0, $n, 0);
        $leftmax = array_fill(0, $n, 0);
        $leftmax[0] = $nums[0];
        for ($i = 1; $i < $n; $i++) {
            $leftmax[$i] = max($leftmax[$i - 1], $nums[$i]);
        }
        $rightmin = array_fill(0, $n, 0);
        $rightmin[$n - 1] = $nums[$n - 1];
        for ($k = $n - 2; $k >= 0; $k--) {
            $rightmin[$k] = min($rightmin[$k + 1], $nums[$k]);
        }
        $res[$n - 1] = $leftmax[$n - 1];
        for ($i = $n - 2; $i >= 0; $i--) {
            $res[$i] = $leftmax[$i];

            if ($leftmax[$i] > $rightmin[$i + 1]) {
                $res[$i] = $res[$i + 1];
            }
        }

        return $res;
    }

}
