<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimumCommonValue {    

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer
     */
    function getCommon($nums1, $nums2) {
        $i = 0;
        $j = 0;
        $m = count($nums1);
        $n = count($nums2);

        while ($i < $m && $j < $n) {
            if ($nums1[$i] === $nums2[$j]) {
                return $nums1[$i];
            }
            if ($nums1[$i] < $nums2[$j]) {
                $i++;
            } else {
                $j++;
            }
        }

        return -1;
    }
}
