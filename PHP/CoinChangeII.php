<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CoinChangeII {    

    /**
     * @param Integer $amount
     * @param Integer[] $coins
     * @return Integer
     */
    function change($amount, $coins) {
        $dp = array_fill(0, $amount + 1, 0);
        $dp[0] = 1;

        foreach ($coins as $c) {
            for ($i = $c; $i <= $amount; $i++) {
                $dp[$i] += $dp[$i - $c];
            }
        }

        return $dp[$amount];
    }

}
