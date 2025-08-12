<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class WaysToExpressAnIntegerAsSumOfPowers {    

    /**
     * @param Integer $n
     * @param Integer $x
     * @return Integer
     */
    function numberOfWays($n, $x) {
        $mod = 1000000007;
        $f = array_fill(0, $n + 1, array_fill(0, $n + 1, 0));
        $f[0][0] = 1;

        for ($i = 1; $i <= $n; $i++) {
            $k = pow($i, $x);
            for ($j = 0; $j <= $n; $j++) {
                $f[$i][$j] = $f[$i - 1][$j];
                if ($k <= $j) {
                    $f[$i][$j] = ($f[$i][$j] + $f[$i - 1][$j - $k]) % $mod;
                }
            }
        }

        return $f[$n][$n];
    }
}
