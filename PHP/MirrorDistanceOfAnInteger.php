<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MirrorDistanceOfAnInteger {    

    /**
     * @param Integer $n
     * @return Integer
     */
    function mirror_distance($n) {
        $reverse = function($x) {
            $y = 0;
            while ($x > 0) {
                $y = $y * 10 + ($x % 10);
                $x = intdiv($x, 10);
            }
            return $y;
        };
        return abs($n - $reverse($n));
    }
}
