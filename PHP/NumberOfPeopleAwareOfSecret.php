<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class NumberOfPeopleAwareOfSecret {    

    /**
     * @param Integer $n
     * @param Integer $delay
     * @param Integer $forget
     * @return Integer
     */
    function peopleAwareOfSecret($n, $delay, $forget) {
        $mod = 1000000007;
        $dp = array_fill(0, $n + 1, 0);
        $dp[1] = 1;

        for ($i = 1; $i <= $n; $i++) {
            for ($j = $i + $delay; $j < $i + $forget; $j++) {
                if ($j > $n) break;
                $dp[$j] = ($dp[$j] + $dp[$i]) % $mod;
            }
        }

        $res = 0;
        for ($i = $n - $forget + 1; $i <= $n; $i++) {
            $res = ($res + $dp[$i]) % $mod;
        }

        return $res;
    }

}
