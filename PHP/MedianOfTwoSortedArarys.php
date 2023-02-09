<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MedianOfTwoSortedArrays {    

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $ar = array_merge($nums1, $nums2);
        sort( $ar );

        if ( count($ar)%2 == 0 ) return ($ar[count($ar)/2] + $ar[(count($ar)/2)-1])/2;

        return $ar[(count($ar)-1)/2];
    }
}
