<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class BinarySearch {    

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {
        if ( $nums[0] == $target ) return 0;

        if ( array_search($target, $nums) ) return array_search($target, $nums);
        
        return -1;
    }

}
