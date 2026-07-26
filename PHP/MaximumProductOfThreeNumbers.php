<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MaximumProductOfThreeNumbers {    

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maximumProduct($nums) {
        $max1 = PHP_INT_MIN;
        $max2 = PHP_INT_MIN;
        $max3 = PHP_INT_MIN;
        $min1 = PHP_INT_MAX;
        $min2 = PHP_INT_MAX;

        foreach ($nums as $num) {
            if ($num > $max1) {
                $max3 = $max2;
                $max2 = $max1;
                $max1 = $num;
            } elseif ($num > $max2) {
                $max3 = $max2;
                $max2 = $num;
            } elseif ($num > $max3) {
                $max3 = $num;
            }

            if ($num < $min1) {
                $min2 = $min1;
                $min1 = $num;
            } elseif ($num < $min2) {
                $min2 = $num;
            }
        }

        return max(
            $max1 * $max2 * $max3,
            $max1 * $min1 * $min2
        );
    }
}
