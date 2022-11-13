<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class RemoveDuplicatesFromSortedArray {    

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates($nums) {
        $nums = array_unique( $nums );
        
        return count( $nums );
    }

}
