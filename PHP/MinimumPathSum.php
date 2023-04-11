<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimumPathSum {    

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function minPathSum($grid) {
        $m = count($grid);
        $n = count($grid[0]);

        for ($i=1; $i < $m; $i++) $grid[$i][0] += $grid[$i-1][0];
        for ($j=1; $j < $n; $j++) $grid[0][$j] += $grid[0][$j-1];
        for ($i=1; $i < $m; $i++) {
            for ($j=1; $j < $n; $j++) $grid[$i][$j] += min($grid[$i-1][$j],$grid[$i][$j-1]);
        }

        return $grid[$m-1][$n-1];
    }
}
