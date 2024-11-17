<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class ShortestSubarrayWithSumAtLeastK {    

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function shortestSubarray($nums, $k) {
        $n = count($nums);
        $s = array_fill(0, $n + 1, 0);
        for ($i = 0; $i < $n; $i++) {
            $s[$i + 1] = $s[$i] + $nums[$i];
        }

        $q = [];
        $ans = $n + 1;

        foreach ($s as $i => $v) {
            while (!empty($q) && $v - $s[$q[0]] >= $k) {
                $ans = min($ans, $i - array_shift($q));
            }
            while (!empty($q) && $s[end($q)] >= $v) {
                array_pop($q);
            }
            $q[] = $i;
        }

        return $ans > $n ? -1 : $ans;
    }

}
