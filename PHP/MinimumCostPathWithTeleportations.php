<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimumCostPathWithTeleportations {    

    /**
     * @param Integer[][] $grid
     * @param Integer $k
     * @return Integer
     */
    function minCost($grid, $k) {
        $m = count($grid);
        $n = count($grid[0]);
        $INF = intdiv(PHP_INT_MAX, 4);

        // f[t][i][j]
        $f = array_fill(0, $k + 1, []);
        for ($t = 0; $t <= $k; $t++) {
            for ($i = 0; $i < $m; $i++) {
                $f[$t][$i] = array_fill(0, $n, $INF);
            }
        }

        $f[0][0][0] = 0;

        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $n; $j++) {
                if ($i > 0) $f[0][$i][$j] = min($f[0][$i][$j], $f[0][$i-1][$j] + $grid[$i][$j]);
                if ($j > 0) $f[0][$i][$j] = min($f[0][$i][$j], $f[0][$i][$j-1] + $grid[$i][$j]);
            }
        }

        $g = [];
        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $n; $j++) {
                $g[$grid[$i][$j]][] = [$i, $j];
            }
        }

        $keys = array_keys($g);
        rsort($keys);

        for ($t = 1; $t <= $k; $t++) {
            $mn = $INF;
            foreach ($keys as $key) {
                foreach ($g[$key] as [$i, $j]) {
                    $mn = min($mn, $f[$t-1][$i][$j]);
                }
                foreach ($g[$key] as [$i, $j]) {
                    $f[$t][$i][$j] = $mn;
                }
            }

            for ($i = 0; $i < $m; $i++) {
                for ($j = 0; $j < $n; $j++) {
                    if ($i > 0) $f[$t][$i][$j] = min($f[$t][$i][$j], $f[$t][$i-1][$j] + $grid[$i][$j]);
                    if ($j > 0) $f[$t][$i][$j] = min($f[$t][$i][$j], $f[$t][$i][$j-1] + $grid[$i][$j]);
                }
            }
        }

        $ans = $INF;
        for ($t = 0; $t <= $k; $t++) {
            $ans = min($ans, $f[$t][$m-1][$n-1]);
        }

        return $ans;
    }
}
