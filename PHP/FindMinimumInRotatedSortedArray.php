<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class FindMinimumInRotatedSortedArray {    

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findMin($nums) {
        $min = $nums[0];

        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] < $min) {
                return $nums[$i];
            }
        }

        return $min;
    }

}
