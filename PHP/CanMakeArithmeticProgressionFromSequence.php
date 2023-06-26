<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CanMakeArithmeticProgressionFromSequence {    

    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function canMakeArithmeticProgression($arr) {
        sort($arr);

        for ( $i=0; $i < count($arr)-2; $i++ ) {
            if ( abs($arr[$i]-$arr[$i+1]) != abs($arr[$i+1]-$arr[$i+2]) ) {
                return false;
            }
        }
        
        return true;
    }

}
