<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MaximizeAreaOfSquareHoleInGrid {    

    /**
     * @param Integer $n
     * @param Integer $m
     * @param Integer[] $hBars
     * @param Integer[] $vBars
     * @return Integer
     */
    function maximizeSquareHoleArea($n, $m, $hBars, $vBars) {
        sort($hBars);
        sort($vBars);

        $a = 1;
        $b = 1;

        $pre = 1;
        $cur = 1;
        foreach ($hBars as $x) {
            if ($x - 1 == $pre) {
                $cur++;
            } else {
                $cur = 2;
            }
            $pre = $x;
            $a = max($a, $cur);
        }

        $pre = 1;
        $cur = 1;
        foreach ($vBars as $x) {
            if ($x - 1 == $pre) {
                $cur++;
            } else {
                $cur = 2;
            }
            $pre = $x;
            $b = max($b, $cur);
        }

        $side = min($a, $b);
        return $side * $side;
    }
}
