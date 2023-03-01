<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class ClimbingStairs {    

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        if ( $n == 1 ) return $n;

        $ways = [];
        $ways[0] = 1;
        $ways[1] = 2;
    
        for ( $stairs = 3; $stairs <= $n; $stairs++ ) {
            $ways[$stairs-1] = $ways[$stairs-2] + $ways[$stairs-3];
        }

        return $ways[$n-1];
    }

}
