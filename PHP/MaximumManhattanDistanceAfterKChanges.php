<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MaximumManhattanDistanceAfterKChanges {    

   /**
     * @param String $s
     * @param Integer $k
     * @return Integer
     */
    function maxDistance($s, $k) {
        $ans = 0;
        $x = 0;
        $y = 0;

        for ($i = 0; $i < strlen($s); $i++) {
            $dir = $s[$i];
            if ($dir === 'N') {
                $y++;
            } elseif ($dir === 'S') {
                $y--;
            } elseif ($dir === 'E') {
                $x++;
            } else { // 'W'
                $x--;
            }

            $manhattan = abs($x) + abs($y) + $k * 2;
            $ans = max($ans, min($manhattan, $i + 1));
        }

        return $ans;
    }
}
