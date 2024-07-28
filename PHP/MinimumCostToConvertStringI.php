<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimumCostToConvertStringI {    

    /**
     * @param String $source
     * @param String $target
     * @param String[] $original
     * @param String[] $changed
     * @param Integer[] $cost
     * @return Integer
     */
    function minimumCost($source, $target, $original, $changed, $cost) {
        $inf = PHP_INT_MAX / 2;
        $n = 26;
        $dp = array_fill(0, $n + 1, array_fill(0, $n, array_fill(0, $n, $inf)));

        $g = array_fill(0, $n, array_fill(0, $n, $inf));
        for ($i = 0; $i < $n; $i++) {
            $g[$i][$i] = 0;
        }

        for ($i = 0; $i < count($original); $i++) {
            $x = ord($original[$i]) - ord('a');
            $y = ord($changed[$i]) - ord('a');
            $g[$x][$y] = min($g[$x][$y], $cost[$i]);
        }

        $dp[0] = $g;
        for ($k = 0; $k < $n; $k++) {
            for ($i = 0; $i < $n; $i++) {
                for ($j = 0; $j < $n; $j++) {
                    $dp[$k + 1][$i][$j] = min($dp[$k][$i][$j], $dp[$k][$i][$k] + $dp[$k][$k][$j]);
                }
            }
        }

        $ans = 0;
        for ($i = 0; $i < strlen($source); $i++) {
            $a = ord($source[$i]) - ord('a');
            $b = ord($target[$i]) - ord('a');
            if ($dp[$n][$a][$b] >= $inf) {
                return -1;
            }
            $ans += $dp[$n][$a][$b];
        }
        return $ans;
    }
}
