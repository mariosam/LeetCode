<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MaximalRectangle {    

    /**
     * @param String[][] $matrix
     * @return Integer
     */
    function maximalRectangle($matrix) {
        $m = count($matrix);
        if ($m === 0) return 0;

        $n = count($matrix[0]);
        $left = array_fill(0, $n, 0);
        $right = array_fill(0, $n, $n);
        $height = array_fill(0, $n, 0);

        $maxArea = 0;

        for ($i = 0; $i < $m; $i++) {
            // update height
            for ($j = 0; $j < $n; $j++) {
                $height[$j] = ($matrix[$i][$j] === '1') ? $height[$j] + 1 : 0;
            }

            // update left
            $curLeft = 0;
            for ($j = 0; $j < $n; $j++) {
                if ($matrix[$i][$j] === '1') {
                    $left[$j] = max($left[$j], $curLeft);
                } else {
                    $left[$j] = 0;
                    $curLeft = $j + 1;
                }
            }

            // update right
            $curRight = $n;
            for ($j = $n - 1; $j >= 0; $j--) {
                if ($matrix[$i][$j] === '1') {
                    $right[$j] = min($right[$j], $curRight);
                } else {
                    $right[$j] = $n;
                    $curRight = $j;
                }
            }

            // compute area
            for ($j = 0; $j < $n; $j++) {
                $maxArea = max($maxArea, ($right[$j] - $left[$j]) * $height[$j]);
            }
        }

        return $maxArea;
    }
}
