<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class NonOverlappingIntervals {    

    /**
     * @param Integer[][] $intervals
     * @return Integer
     */
    function eraseOverlapIntervals($intervals) {
        usort($intervals, function($a, $b) {
            return $a[1] - $b[1];
        });
        $t = $intervals[0][1];
        $ans = 0;
        
        for ($i = 1; $i < count($intervals); $i++) {
            if ($intervals[$i][0] >= $t) {
                $t = $intervals[$i][1];
            } else {
                $ans++;
            }
        }

        return $ans;
    }

}
