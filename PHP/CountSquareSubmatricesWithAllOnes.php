<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CountSquareSubmatricesWithAllOnes {    

    /**
     * @param Integer[][] $matrix
     * @return Integer
     */
    function countSquares($matrix) {
        $m = count($matrix);
        $n = count($matrix[0]);
        $ans = 0;

        $f = array_fill(0, $m, array_fill(0, $n, 0));

        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $n; $j++) {
                if ($matrix[$i][$j] == 0) continue;

                if ($i == 0 || $j == 0) {
                    $f[$i][$j] = 1;
                } else {
                    $f[$i][$j] = min($f[$i-1][$j-1], min($f[$i-1][$j], $f[$i][$j-1])) + 1;
                }

                $ans += $f[$i][$j];
            }
        }
        return $ans;
    }
}
