<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class FindValidMatrixGivenRowAndColumnSums {    

    /**
     * @param Integer[] $rowSum
     * @param Integer[] $colSum
     * @return Integer[][]
     */
    function restoreMatrix($rowSum, $colSum) {
        $m = count($rowSum);
        $n = count($colSum);
        $res = array_fill(0, $m, array_fill(0, $n, 0));

        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $n; $j++) {
                $res[$i][$j] = min($rowSum[$i], $colSum[$j]);
                $rowSum[$i] -= $res[$i][$j];
                $colSum[$j] -= $res[$i][$j];
            }
        }

        return $res;
    }
}
