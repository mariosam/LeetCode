<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class KthMissingPositiveNumber {    

    /**
     * @param Integer[] $arr
     * @param Integer $k
     * @return Integer
     */
    function findKthPositive($arr, $k) {
        $positiveNaturalNumber = $arr[0];
        $missingCount = $arr[0] - 1;
        if ( $missingCount >= $k ) return $k;
        
        for ( $i=1; $i < count( $arr ); $i++ ) {
            $positiveNaturalNumber++;
            if ( $positiveNaturalNumber != $arr[$i] ) {
                $missingCount++;
                $i--;
                if ( $missingCount == $k ) return $positiveNaturalNumber;
            }
        }

        return ($positiveNaturalNumber) + ($k - $missingCount);
    }

}
