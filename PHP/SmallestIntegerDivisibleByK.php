<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class SmallestIntegerDivisibleByK {    

    /**
     * @param Integer $k
     * @return Integer
     */
    function smallestRepunitDivByK($k) {
        if ($k % 2 == 0 || $k % 5 == 0) {
            return -1;
        }

        $n = 1;
        $count = 1;

        while ($n % $k != 0) {
            $n = ($n * 10 + 1) % $k;
            $count++;
        }

        return $count;
    }

}
