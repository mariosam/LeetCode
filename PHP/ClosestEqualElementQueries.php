<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class ClosestEqualElementQueries {    

    /**
     * @param Integer[] $nums
     * @param Integer[] $queries
     * @return Integer[]
     */
    function solveQueries($nums, $queries) {
        $n = count($nums);
        $m = $n * 2;
        $d = array_fill(0, $m, $m);

        $left = [];
        for ($i = 0; $i < $m; $i++) {
            $x = $nums[$i % $n];
            if (isset($left[$x])) {
                $d[$i] = min($d[$i], $i - $left[$x]);
            }
            $left[$x] = $i;
        }

        $right = [];
        for ($i = $m - 1; $i >= 0; $i--) {
            $x = $nums[$i % $n];
            if (isset($right[$x])) {
                $d[$i] = min($d[$i], $right[$x] - $i);
            }
            $right[$x] = $i;
        }

        for ($i = 0; $i < $n; $i++) {
            $d[$i] = min($d[$i], $d[$i + $n]);
        }

        $ans = [];
        foreach ($queries as $query) {
            $ans[] = ($d[$query] >= $n) ? -1 : $d[$query];
        }

        return $ans;
    }

}
