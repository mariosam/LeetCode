<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class DivisibleAndNonDivisibleSumsDifference {    

    /**
     * @param Integer $n
     * @param Integer $m
     * @return Integer
     */
    function differenceOfSums($n, $m) {
        $num1 = 0;
        $num2 = 0;
        for ($i = 1; $i <= $n; $i++) {
            if ($i % $m == 0) {
                $num2 += $i;
            } else {
                $num1 += $i;
            }
        }
        return $num1 - $num2;
    }

}
