<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class SumOfSquareNumbers {    

    /**
     * @param Integer $c
     * @return Boolean
     */
    function judgeSquareSum($c) {
        $a = 0;
        $b = (int)sqrt($c);
        while ($a <= $b) {
            $s = $a * $a + $b * $b;
            if ($s == $c) {
                return true;
            }
            if ($s < $c) {
                $a++;
            } else {
                $b--;
            }
        }
        return false;
    }

}
