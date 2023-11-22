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
        $right = max($piles);
        $left = 1;

        while ($left < $right) {
            $mid = $left + (($right - $left) >> 1);
            if ($this->getTime($piles, $mid) <= $h) {
                $right = $mid;
            } else {
                $left = $mid + 1;
            }
        }

        return $left;
    }

    function getTime($piles, $v) {
        $time = 0;
    
        foreach ($piles as $p) {
            $time += ceil($p / $v);
        }
    
        return $time;
    }
}
