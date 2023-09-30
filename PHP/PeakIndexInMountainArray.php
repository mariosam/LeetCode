<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class PeakIndexInMountainArray {    

    /**
     * @param Integer[] $arr
     * @return Integer
     */
    function peakIndexInMountainArray($arr) {
        $left = 0;
        $right = count($arr) - 1;

        while ($left <= $right) {
            $mid = $left + intdiv($right - $left, 2);
            if ($arr[$mid] > $arr[$mid - 1] && $arr[$mid] > $arr[$mid + 1]) {
                return $mid;
            }
            if ($arr[$mid] < $arr[$mid + 1]) {
                $left = $mid;
            } else {
                $right = $mid;
            }
        }

        return -1;
    }

}
