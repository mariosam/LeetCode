<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class FindTheStudentThatWillReplaceTheChalk {    

    /**
     * @param Integer[] $chalk
     * @param Integer $k
     * @return Integer
     */
    function chalkReplacer($chalk, $k) {
        $sum = array_sum($chalk); // Calculate the sum of the chalk array
        $k %= $sum; // Reduce k by modulo the sum

        for ($i = 0; $i < count($chalk); $i++) {
            if ($k < $chalk[$i]) {
                return $i; // Return the current index if k is less than chalk amount
            }
            $k -= $chalk[$i]; // Reduce k by the current chalk amount
        }
        return -1;
    }
}
