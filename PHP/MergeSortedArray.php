<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MergeSortedArray {    

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge($nums1, $m, $nums2, $n) {
        for ( $i=$m, $j=0; $i < count($nums1); $i++, $j++ ) {
            $nums1[$i] = $nums2[$j];
        }
        
        sort($nums1);

        if ( $m == 0 ) $nums1 = $nums2;

        return $nums1;
    }

}
