<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CountCoveredBuildings {    

    /**
     * @param Integer $n
     * @param Integer[][] $buildings
     * @return Integer
     */
    function countCoveredBuildings($n, $buildings) {
        $g1 = [];
        $g2 = [];

        foreach ($buildings as $b) {
            [$x, $y] = $b;
            $g1[$x][] = $y;
            $g2[$y][] = $x;
        }

        foreach ($g1 as &$list) {
            sort($list);
        }
        foreach ($g2 as &$list) {
            sort($list);
        }

        $ans = 0;
        foreach ($buildings as $b) {
            [$x, $y] = $b;
            $l1 = $g1[$x];
            $l2 = $g2[$y];

            if ($l2[0] < $x && $x < $l2[count($l2) - 1] &&
                $l1[0] < $y && $y < $l1[count($l1) - 1]) {
                $ans++;
            }
        }

        return $ans;
    }
}
