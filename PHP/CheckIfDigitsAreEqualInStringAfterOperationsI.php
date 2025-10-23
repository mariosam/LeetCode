<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CheckIfDigitsAreEqualInStringAfterOperationsI {    

    /**
     * @param String $s
     * @return Boolean
     */
    function hasSameDigits($s) {
        $t = str_split($s);
        $n = count($t);
        for ($k = $n - 1; $k > 1; --$k) {
            for ($i = 0; $i < $k; ++$i) {
                $t[$i] = chr(((intval($t[$i]) + intval($t[$i + 1])) % 10) + ord('0'));
            }
        }
        return $t[0] === $t[1];
    }

}
