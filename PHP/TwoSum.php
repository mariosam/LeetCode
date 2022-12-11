<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class TwoSum {    

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        for ( $x=0; $x < count($nums); $x++ ) {
            for ( $y=$x+1; $y < count($nums); $y++ ) {
                if ( $nums[$x] + $nums[$y] == $target ) {
                    return [$x, $y];
                }
            }
        }
    }

}
