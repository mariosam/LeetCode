<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class ConcatenationOfConsecutiveBinaryNumbers {    

    /**
     * @param Integer $n
     * @return Integer
     */
    function concatenatedBinary($n) {
        $MOD = 1000000007;
        $result = 0;

        for ($i = 1; $i <= $n; $i++) {
            $binary = decbin($i);

            for ($j = 0; $j < strlen($binary); $j++) {
                $result = ($result * 2 + ($binary[$j] - '0')) % $MOD;
            }
        }

        return $result;
    }

}
