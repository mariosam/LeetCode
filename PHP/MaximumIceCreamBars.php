<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MaximumIceCreamBars {    

    /**
     * @param Integer[] $costs
     * @param Integer $coins
     * @return Integer
     */
    function maxIceCream($costs, $coins) {
        $ices = 0;
        $dollars = 0;
        sort($costs);

        for ( $i=0; $i < count($costs); $i++ ) {
            if ( $dollars < $coins && $coins > $costs[$i] ) {
                $dollars += $costs[$i];
                $ices++;
            }
            //se passou do ponto
            if ( $dollars > $coins ) {
                $dollars -= $costs[$i];
                $ices--;
                return $ices;
            }
            if ( $dollars == $coins ) return $ices;
        }

        return $ices;
    }
}
