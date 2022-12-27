<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class RemoveElement {    

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement($nums, $val) {
        $nums = array_filter( $nums, function($num) use ($val) { return $num !== $val; });
        
        return count( $nums );
    }

}
