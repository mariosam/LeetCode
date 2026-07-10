<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class ConcatenateNonZeroDigitsAndMultiplyBySumI {    

    /**
     * @param Integer $n
     * @return Integer
     */
    function sumAndMultiply($n) {
        $p = 1;
        $x = 0;
        $s = 0;

        while ($n > 0) {
            $v = $n % 10;
            if ($v != 0) {
                $s += $v;
                $x += $p * $v;
                $p *= 10;
            }
            $n = intdiv($n, 10);
        }
        return $x * $s;
    }

}
