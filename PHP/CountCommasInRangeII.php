<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CountCommasInRangeII {    

    /**
     * @param Integer $n
     * @return Integer
     */
    function countCommas($n) {
        $ans = 0;

        for ($x = 1000; $x <= $n; $x *= 1000) {
            $ans += $n - $x + 1;
        }
        return $ans;
    }
}
