<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class ComplementOfBase10Integer {    

    /**
     * @param Integer $n
     * @return Integer
     */
    function bitwiseComplement($n) {
        $lo = 1;
        $hi = 31;

        while ($lo < $hi) {
            $mid = intdiv($lo + $hi, 2);
            $numCur = 1 << $mid;

            if ($numCur <= $n) {
                $lo = $mid + 1;
            } else {
                $hi = $mid;
            }
        }

        return ((1 << $hi) - 1) ^ $n;
    }

}
