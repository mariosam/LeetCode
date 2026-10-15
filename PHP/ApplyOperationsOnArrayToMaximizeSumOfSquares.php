<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class ApplyOperationsOnArrayToMaximizeSumOfSquares {    

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function maxSum($nums, $k) {
        $dict = array_fill(0, 32, 0);
        $mod = 1000000007;

        foreach ($nums as $num) {
            for ($j = 0; $num != 0 && $j < 32; $j++) {
                $dict[$j] += $num & 1;
                $num >>= 1;
            }
        }

        $ret = 0;
        for ($i = 0; $i < $k; $i++) {
            $num = 0;
            for ($j = 31; $j >= 0; $j--) {
                if ($dict[$j] > 0) {
                    $num += 1 << $j;
                    $dict[$j]--;
                }
            }
            $ret = ($ret + $num * $num) % $mod;
        }
        return $ret;
    }
}
