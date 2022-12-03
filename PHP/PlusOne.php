<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class PlusOne {    

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        for ( $i = count($digits)-1; $i >= 0; $i-- ) {
            $digits[$i]++;

            if ( $digits[$i] > 9 ) $digits[$i] = 0; else return $digits;
        }

        array_unshift( $digits, 1 );

        return $digits;
        //return str_split( bcadd( 1, implode($digits) ) );
    }

}
