<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class FindThePivotInteger {    

    /**
     * @param Integer $n
     * @return Integer
     */
    function pivotInteger($n) {
        for ($x = 1; $x <= $n; ++$x) {
            if ((1 + $x) * $x === ($x + $n) * ($n - $x + 1)) {
                return $x;
            }
        }
        return -1;
    }
}
