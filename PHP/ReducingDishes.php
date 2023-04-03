<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class ReducingDishes {    

    /**
     * @param Integer[] $satisfaction
     * @return Integer
     */
    function maxSatisfaction($satisfaction) {
        sort($satisfaction);
        $sum = 0;
        $res = 0;

        for ( $i=count($satisfaction)-1; $i >= 0; $i-- ) {
            if ( $satisfaction[$i] + $res + $sum > $res ) {
                $res = $satisfaction[$i] + $res + $sum;
                $sum += $satisfaction[$i];
            }
        }

        return $res;
    }

}
