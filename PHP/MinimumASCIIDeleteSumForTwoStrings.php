<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimumASCIIDeleteSumForTwoStrings {    

    /**
     * @param String $s1
     * @param String $s2
     * @return Integer
     */
    function minimumDeleteSum($s1, $s2) {
        $m = strlen($s1);
        $n = strlen($s2);
        $f = array_fill(0, $m + 1, array_fill(0, $n + 1, 0));

        for ($i = 1; $i <= $m; $i++) {
            $f[$i][0] = $f[$i - 1][0] + ord($s1[$i - 1]);
        }

        for ($j = 1; $j <= $n; $j++) {
            $f[0][$j] = $f[0][$j - 1] + ord($s2[$j - 1]);
        }

        for ($i = 1; $i <= $m; $i++) {
            for ($j = 1; $j <= $n; $j++) {
                if ($s1[$i - 1] === $s2[$j - 1]) {
                    $f[$i][$j] = $f[$i - 1][$j - 1];
                } else {
                    $f[$i][$j] = min($f[$i - 1][$j] + ord($s1[$i - 1]), $f[$i][$j - 1] + ord($s2[$j - 1]));
                }
            }
        }

        return $f[$m][$n];
    }
}
