<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class NumberOfZigZagArraysI {    

    /**
     * @param Integer $n
     * @param Integer $l
     * @param Integer $r
     * @return Integer
     */
    function zigZagArrays($n, $l, $r) {
        $r -= $l;
        $dp = array_fill(0, $r + 1, 1);
        $mod = 1000000007;

        for ($i = 1; $i < $n; $i++) {
            $pre = 0;
            if ($i & 1) {
                for ($v = 0; $v <= $r; $v++) {
                    $pre2 = $pre + $dp[$v];
                    $dp[$v] = $pre;
                    $pre = $pre2 % $mod;
                }
            } else {
                for ($v = $r; $v >= 0; $v--) {
                    $pre2 = $pre + $dp[$v];
                    $dp[$v] = $pre;
                    $pre = $pre2 % $mod;
                }
            }
        }
        $sum = array_sum($dp);
        return ($sum * 2) % $mod;
    }

}
