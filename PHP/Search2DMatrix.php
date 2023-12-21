<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class Search2DMatrix {    

    /**
     * @param Integer[][] $matrix
     * @param Integer $target
     * @return Boolean
     */
    function searchMatrix($matrix, $target) {
        $len1 = count($matrix);
        if ($len1 === 0) {
            return false;
        }
        $len2 = count($matrix[0]);
        $left = 0;
        $right = $len1 * $len2 - 1;

        while ($left <= $right) {
            $mid = intval(($left + $right) / 2);
            $x = intval($mid / $len2);
            $y = $mid % $len2;

            if ($matrix[$x][$y] === $target) {
                return true;
            } elseif ($matrix[$x][$y] < $target) {
                $left = $mid + 1;
            } else {
                $right = $mid - 1;
            }
        }

        return false;
    }

}
