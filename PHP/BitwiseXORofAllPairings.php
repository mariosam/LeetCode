<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class BitwiseXORofAllPairings {    

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer
     */
    function xorAllNums($nums1, $nums2) {
        $xors1 = array_reduce($nums1, function($carry, $num) {
            return $carry ^ $num;
        }, 0);

        $xors2 = array_reduce($nums2, function($carry, $num) {
            return $carry ^ $num;
        }, 0);

        return (count($nums1) % 2 * $xors2) ^ (count($nums2) % 2 * $xors1);
    }

}
