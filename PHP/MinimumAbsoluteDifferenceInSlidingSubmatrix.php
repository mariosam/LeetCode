<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimumAbsoluteDifferenceInSlidingSubmatrix {    

    /**
     * @param Integer[][] $grid
     * @param Integer $k
     * @return Integer[][]
     */
    function minAbsDiff($grid, $k) {
        $m = count($grid);
        $n = count($grid[0]);

        $ans = array_fill(0, $m - $k + 1, array_fill(0, $n - $k + 1, 0));

        for ($i = 0; $i <= $m - $k; $i++) {
            for ($j = 0; $j <= $n - $k; $j++) {

                $nums = [];

                for ($x = $i; $x < $i + $k; $x++) {
                    for ($y = $j; $y < $j + $k; $y++) {
                        $nums[] = $grid[$x][$y];
                    }
                }

                sort($nums);

                $d = PHP_INT_MAX;

                for ($t = 1; $t < count($nums); $t++) {
                    $a = $nums[$t - 1];
                    $b = $nums[$t];

                    if ($a != $b) {
                        $d = min($d, abs($a - $b));
                    }
                }

                $ans[$i][$j] = ($d == PHP_INT_MAX) ? 0 : $d;
            }
        }

        return $ans;
    }
}
