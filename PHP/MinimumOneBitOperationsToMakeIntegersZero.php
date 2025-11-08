<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimumOneBitOperationsToMakeIntegersZero {    

   /**
     * @param Integer $n
     * @return Integer
     */
    function minimumOneBitOperations($n) {
        $ans = 0;
        while ($n > 0) {
            $ans ^= $n;
            $n >>= 1;
        }
        return $ans;
    }
}
