<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MaxDotProductOfTwoSubsequences {    

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer
     */
    function maxDotProduct($nums1, $nums2) {
        $m = count($nums1);
        $n = count($nums2);
        $dp = array();
        for ($i = 0; $i <= $m; ++$i) {
            $dp[$i] = array();
            for ($j = 0; $j <= $n; ++$j) {
                $dp[$i][$j] = PHP_INT_MIN;
            }
        }
        
        for ($i = 1; $i <= $m; ++$i) {
            for ($j = 1; $j <= $n; ++$j) {
                $dp[$i][$j] = max($dp[$i - 1][$j], $dp[$i][$j - 1]);
                $dp[$i][$j] = max($dp[$i][$j], max(0, $dp[$i - 1][$j - 1]) + $nums1[$i - 1] * $nums2[$j - 1]);
            }
        }
        
        return $dp[$m][$n];
    }
}
