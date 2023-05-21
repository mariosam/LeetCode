<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CountSubarraysWithFixedBounds {    

    /**
     * @param Integer[] $nums
     * @param Integer $minK
     * @param Integer $maxK
     * @return Integer
     */
    function countSubarrays($nums, $minK, $maxK) {
        $l = -1; 
        $r1 = -1;
        $r2 = -1;
        $tot = 0;

        for ( $i=0; $i < count($nums); $i++ ) {
            if ( $nums[$i] > $maxK || $nums[$i] < $minK ) $l = $i;
            if ( $nums[$i] == $minK ) $r1 = $i;
            if ( $nums[$i] == $maxK ) $r2 = $i;

            $tot += max(0, min($r1, $r2)-$l);
        }

        return $tot;
    }
}
