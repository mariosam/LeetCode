<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class Triangle {    

    /**
     * @param Integer[][] $triangle
     * @return Integer
     */
    function minimumTotal($triangle) {
        if (count($triangle) === 0) return 0;
        if (count($triangle) === 1) return $triangle[0][0];

        $curr = array_fill(0, count($triangle), PHP_INT_MAX);
        $curr[0] = $triangle[0][0];
        $min = PHP_INT_MAX;

        for ($i = 1; $i < count($triangle); $i++) {
            $row = $triangle[$i];
            $prev = $curr;
            for ($j = 0; $j < count($row); $j++) {
                if ($j === 0) {
                    $curr[$j] = $prev[0] + $row[$j];
                } elseif ($j === count($row) - 1) {
                    $curr[$j] = $prev[count($row) - 2] + $row[$j];
                } else {
                    $curr[$j] = min($prev[$j - 1], $prev[$j]) + $row[$j];
                }
                if ($i === count($triangle) - 1) {
                    $min = min($min, $curr[$j]);
                }
            }
        }
        return $min;
    }
}
