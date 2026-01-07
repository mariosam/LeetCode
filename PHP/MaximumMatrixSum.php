<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MaximumMatrixSum {    

    /**
     * @param Integer[][] $matrix
     * @return Integer
     */
    function maxMatrixSum($matrix) {
        $sum = 0;
        $cnt = 0;
        $minAbs = PHP_INT_MAX;

        foreach ($matrix as $row) {
            foreach ($row as $v) {
                $abs = abs($v);
                $sum += $abs;
                $minAbs = min($minAbs, $abs);
                if ($v < 0) {
                    $cnt++;
                }
            }
        }

        if ($cnt % 2 === 1) {
            $sum -= $minAbs * 2;
        }

        return $sum;
    }
}
