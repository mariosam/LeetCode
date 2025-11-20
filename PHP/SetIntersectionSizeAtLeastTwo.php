<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class SetIntersectionSizeAtLeastTwo {    

    /**
     * @param Integer[][] $intervals
     * @return Integer
     */
    function intersectionSizeTwo($intervals) {
        // Sort by end ASC, and if tie, start DESC
        usort($intervals, function($a, $b) {
            if ($a[1] === $b[1]) return $b[0] - $a[0];
            return $a[1] - $b[1];
        });

        $res = 2;
        $a = $intervals[0][1] - 1;
        $b = $intervals[0][1];

        foreach ($intervals as $iv) {
            $s = $iv[0];
            $e = $iv[1];

            if ($s <= $a) {
                continue;
            } elseif ($s <= $b) {
                $res++;
                $a = $b;
                $b = $e;
            } else {
                $res += 2;
                $a = $e - 1;
                $b = $e;
            }
        }

        return $res;
    }

}
