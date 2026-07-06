<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class RemoveCoveredIntervals {    

    /**
     * @param Integer[][] $intervals
     * @return Integer
     */
    function removeCoveredIntervals($intervals) {
        usort($intervals, function($a, $b) {
            if ($a[0] == $b[0]) {
                return $b[1] <=> $a[1];
            }
            return $a[0] <=> $b[0];
        });

        $ans = 0;
        $prevEnd = 0;

        foreach ($intervals as $interval) {
            if ($prevEnd < $interval[1]) {
                $prevEnd = $interval[1];
                $ans++;
            }
        }
        return $ans;
    }

}
