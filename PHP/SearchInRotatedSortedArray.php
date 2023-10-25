<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class SearchInRotatedSortedArray {    

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {
        $left = 0;
        $right = count($nums) - 1;
        while ($left < $right) {
            $mid = ($right + $left) >> 1;
            if ($nums[$mid] >= $nums[0] && ($target > $nums[$mid] || $target < $nums[0])) {
                $left = $mid + 1;
            } elseif ($target > $nums[$mid] && $target < $nums[0]) {
                $left = $mid + 1;
            } else {
                $right = $mid;
            }
        }
        if ($left == $right && $nums[$left] == $target) {
            return $left;
        }
        return -1;
    }

}
