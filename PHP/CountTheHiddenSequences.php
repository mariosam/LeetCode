<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CountTheHiddenSequences {    

    /**
     * @param Integer[] $differences
     * @param Integer $lower
     * @param Integer $upper
     * @return Integer
     */
    function numberOfArrays($differences, $lower, $upper) {
        $x = 0;
        $mi = 0;
        $mx = 0;

        foreach ($differences as $d) {
            $x += $d;
            $mi = min($mi, $x);
            $mx = max($mx, $x);
        }

        return max($upper - $lower - ($mx - $mi) + 1, 0);
    }

}
