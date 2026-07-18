<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class SortedGCDPairQueries {    

    /**
     * @param Integer[] $nums
     * @param Integer[] $queries
     * @return Integer[]
     */
    function gcdValues($nums, $queries) {
        $mx = max($nums);
        $cntX = array_fill(0, $mx + 1, 0);
        $cntGcd = array_fill(0, $mx + 1, 0);

        foreach ($nums as $x) {
            $cntX[$x]++;
        }

        for ($i = $mx; $i > 0; $i--) {
            $cnt = 0;
            for ($j = $i; $j <= $mx; $j += $i) {
                $cnt += $cntX[$j];
                $cntGcd[$i] -= $cntGcd[$j];
            }
            $cntGcd[$i] += intdiv($cnt * ($cnt - 1), 2);
        }

        for ($i = 1; $i <= $mx; $i++) {
            $cntGcd[$i] += $cntGcd[$i - 1];
        }
        
        $ans = [];

        foreach ($queries as $query) {
            $target = $query + 1;
            $left = 0;
            $right = count($cntGcd);

            while ($left < $right) {
                $mid = intdiv($left + $right, 2);
                if ($cntGcd[$mid] < $target) {
                    $left = $mid + 1;
                } else {
                    $right = $mid;
                }
            }
            $ans[] = $left;
        }
        return $ans;
    }
}
