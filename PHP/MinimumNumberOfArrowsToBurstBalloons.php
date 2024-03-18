<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimumNumberOfArrowsToBurstBalloons {    

    /**
     * @param Integer[][] $points
     * @return Integer
     */
    function findMinArrowShots($points) {
        usort($points, function($a, $b) {
            return $a[0] - $b[0];
        });
        $ret = 1;
        for ($i = 1; $i < count($points); $i++) {
            if ($points[$i][0] > $points[$i - 1][1]) {
                $ret++;
            } else {
                $points[$i][1] = min($points[$i][1], $points[$i - 1][1]);
            }
        }
        return $ret;
    }
}
