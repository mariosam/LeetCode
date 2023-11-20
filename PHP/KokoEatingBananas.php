<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class KokoEatingBananas {    

    /**
     * @param Integer[] $piles
     * @param Integer $h
     * @return Integer
     */
    function minEatingSpeed($piles, $h) {
        $l = 1;
        $r = (int) Pow(10, 9);

        while ( $l <= $r ) {
            $mid = ($l+$r)/2;
            if ( $this->canEat($piles, $mid, $h) ) {
                $r = $mid-1;
            } else {
                $l = $mid+1;
            }
        }

        return $l;
    }

    function canEat($piles, $mid, $h) {
        $result = 0;

        for ( $i=0; $i < count($piles); $i++ ) {
            $temp = $piles[$i]/$mid;
            $result = $result + (int) Ceil($temp);
            if ( $result > $h ) {
                return false;
            }
        }
        
        if ( $result <= $h ) {
            return true;
        }

        return false;
    }
}
