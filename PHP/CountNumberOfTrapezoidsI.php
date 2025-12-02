<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CountNumberOfTrapezoidsI {    

    /**
     * @param Integer[][] $points
     * @return Integer
     */
    function countTrapezoids($points) {
        $mod = 1000000007;
        $cnt = [];

        foreach ($points as $p) {
            $y = $p[1];
            if (!isset($cnt[$y])) $cnt[$y] = 0;
            $cnt[$y]++;
        }

        $ans = 0;
        $s = 0;

        foreach ($cnt as $v) {
            $t = ($v * ($v - 1)) / 2;
            $ans = ($ans + ($s * $t) % $mod) % $mod;
            $s += $t;
        }

        return (int)$ans;
    }

}
