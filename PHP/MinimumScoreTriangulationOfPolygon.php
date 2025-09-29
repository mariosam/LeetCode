<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimumScoreTriangulationOfPolygon {    

    /**
     * @param Integer[] $values
     * @return Integer
     */
    function minScoreTriangulation($values) {
        $n = count($values);
        $dp = array_fill(0, $n, array_fill(0, $n, 0));

        for ($i = $n - 3; $i >= 0; $i--) {
            for ($j = $i + 2; $j < $n; $j++) {
                $dp[$i][$j] = PHP_INT_MAX;
                for ($k = $i + 1; $k < $j; $k++) {
                    $dp[$i][$j] = min(
                        $dp[$i][$j],
                        $dp[$i][$k] + $dp[$k][$j] + $values[$i] * $values[$j] * $values[$k]
                    );
                }
            }
        }
        return $dp[0][$n - 1];
    }
}
