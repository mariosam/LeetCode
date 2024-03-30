<?php
/**
 * @version PHP 8.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class SquaresOfSortedArray {    

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortedSquares($nums) {
        $n = count($nums);
        $res = array_fill(0, $n, 0);
        $i = 0;
        $j = $n - 1;
        $k = $n - 1;
        while ($i <= $j) {
            if ($nums[$i] * $nums[$i] > $nums[$j] * $nums[$j]) {
                $res[$k] = $nums[$i] * $nums[$i];
                $i++;
            } else {
                $res[$k] = $nums[$j] * $nums[$j];
                $j--;
            }
            $k--;
        }
        return $res;
    }

}
