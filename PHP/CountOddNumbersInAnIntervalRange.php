<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CountOddNumbersInAnIntervalRange {    

    /**
     * @param Integer $low
     * @param Integer $high
     * @return Integer
     */
    function countOdds($low, $high) {
        $diff = (($high - $low)+1)/2;

        if ( $low % 2 == 0 ) {
            $diff = floor($diff);
        } else {
            $diff = ceil($diff);
        }

        return $diff;
    }

}
