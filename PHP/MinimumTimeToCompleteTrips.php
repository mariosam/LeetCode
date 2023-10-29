<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimumTimeToCompleteTrips {    

    /**
     * @param Integer[] $time
     * @param Integer $totalTrips
     * @return Integer
     */
    function minimumTime($time, $totalTrips) {
        $min = 1;
        $max = 1e14;
    
        while ( $min < $max ) {
            $mid = $min + ($max-$min)/2;
    
            if ( $this->canComplete($mid, $totalTrips, $time) ) {
                $max = $mid;
            } else {
                $min = $mid + 1;
            }
        }
    
        return round($max);
    }

    function canComplete($mid, $trips, $time) {
        $total = 0;
    
        for ( $i=0; $i < count($time); $i++ ) $total += $mid / $time[$i];
    
        return $total >= $trips;
    }
}
