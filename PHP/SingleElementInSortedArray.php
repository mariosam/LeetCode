<?php
/**
 * @version PHP 8.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class SingleElementInSortedArray {    

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNonDuplicate($nums) {
        if ( count($nums) == 1 ) return $nums[0];
        sort($nums);

        if ( $nums[0] != $nums[1] ) return $nums[0];
        for ( $i=1; $i < sizeof($nums); $i++ ) {
            if ( $nums[$i] != $nums[$i-1] && $nums[$i] != $nums[$i+1] ) return $nums[$i];
        }

        return $nums[count($nums)];
    }
}
