<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class LastStoneWeight {    

    /**
     * @param Integer[] $stones
     * @return Integer
     */
    function lastStoneWeight($stones) {
        if ( count($stones) < 2 ) return $stones[0];

        sort( $stones );
        $a = array_pop( $stones );
        $b = array_pop( $stones );
        array_push( $stones, $a-$b );
        
        return $this->lastStoneWeight($stones);
    }

}
