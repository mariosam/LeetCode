<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class FindPolygonWithTheLargestPerimeter {    

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function largestPerimeter($nums) {
        sort($nums);
        $n = count($nums);
        $s = array_fill(0, $n + 1, 0);

        for ($i = 1; $i <= $n; ++$i) {
            $s[$i] = $s[$i - 1] + $nums[$i - 1];
        }

        $ans = -1;

        for ($k = 3; $k <= $n; ++$k) {
            if ($s[$k - 1] > $nums[$k - 1]) {
                $ans = max($ans, $s[$k]);
            }
        }

        return $ans;
    }

}
