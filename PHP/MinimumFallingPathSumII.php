<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimumFallingPathSumII {    

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function minFallingPathSum($grid) {
        $n = count($grid);
        $f = array_fill(0, $n + 1, array_fill(0, $n, 0));
        $inf = 1 << 30;

        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n; $j++) {
                $f[$i + 1][$j] = $grid[$i][$j];
            }
        }

        for ($i = 1; $i <= $n; $i++) {
            for ($j = 0; $j < $n; $j++) {
                $x = $inf;
                for ($k = 0; $k < $n; $k++) {
                    if ($k !== $j) {
                        $x = min($x, $f[$i - 1][$k]);
                    }
                }
                if ($x === $inf) {
                    $x = 0;
                }
                $f[$i][$j] += $x;
            }
        }

        $minSum = PHP_INT_MAX;
        foreach ($f[$n] as $sum) {
            $minSum = min($minSum, $sum);
        }
        return $minSum;
    }
}
