<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CountWaysToBuildGoodStrings {    

    /**
     * @param Integer $low
     * @param Integer $high
     * @param Integer $zero
     * @param Integer $one
     * @return Integer
     */
    function countGoodStrings($low, $high, $zero, $one) {
        $modulo = 1e9 + 7;
        $dp = array_fill(0, $high + 1, 0);
        $dp[0] = 1;

        for ($end = 1; $end <= $high; $end++) {
            if ($end >= $zero) {
                $dp[$end] = ($dp[$end] + $dp[$end - $zero]) % $modulo;
            }
            if ($end >= $one) {
                $dp[$end] = ($dp[$end] + $dp[$end - $one]) % $modulo;
            }
        }

        $result = 0;
        for ($i = $low; $i <= $high; $i++) {
            $result = ($result + $dp[$i]) % $modulo;
        }

        return $result;
    }

}
