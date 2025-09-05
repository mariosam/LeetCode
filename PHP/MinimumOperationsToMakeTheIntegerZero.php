<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimumOperationsToMakeTheIntegerZero {    

    /**
     * @param Integer $num1
     * @param Integer $num2
     * @return Integer
     */
    function makeTheIntegerZero($num1, $num2) {
        for ($ops = 0; $ops <= 60; $ops++) {
            $target = $num1 - $ops * $num2;
            if ($target < 0) continue;

            // Count set bits in target
            $bitCount = substr_count(decbin($target), "1");

            if ($bitCount <= $ops && $ops <= $target) {
                return (int)$ops;
            }
        }
        return -1;
    }
}
