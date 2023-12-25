<?php
/**
 * @version PHP 8.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class StrangePrinter {    

    /**
     * @param String $s
     * @return Integer
     */
    function strangePrinter($s) {
        $n = strlen($s);
        $dp = array_fill(0, $n, array_fill(0, $n, 0));

        for ($i = $n - 1; $i >= 0; $i--) {
            $dp[$i][$i] = 1;
            for ($j = $i + 1; $j < $n; $j++) {
                if ($s[$i] === $s[$j]) {
                    $dp[$i][$j] = $dp[$i][$j - 1];
                } else {
                    $dp[$i][$j] = PHP_INT_MAX;
                    for ($k = $i; $k < $j; $k++) {
                        $dp[$i][$j] = min($dp[$i][$j], $dp[$i][$k] + $dp[$k + 1][$j]);
                    }
                }
            }
        }

        return $dp[0][$n - 1];
    }

}
