<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class TrionicArrayII {    

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSumTrionic($nums) {
        $n = count($nums);
        $i = 0;
        $ans = PHP_INT_MIN;

        while ($i < $n) {
            $l = $i;

            $i++;
            while ($i < $n && $nums[$i - 1] < $nums[$i]) {
                $i++;
            }
            if ($i == $l + 1) continue;

            $p = $i - 1;
            $s = $nums[$p - 1] + $nums[$p];

            while ($i < $n && $nums[$i - 1] > $nums[$i]) {
                $s += $nums[$i];
                $i++;
            }
            if ($i == $p + 1 || $i == $n || $nums[$i - 1] == $nums[$i]) continue;

            $q = $i - 1;
            $s += $nums[$i];
            $i++;

            $mx = 0;
            $t = 0;
            while ($i < $n && $nums[$i - 1] < $nums[$i]) {
                $t += $nums[$i];
                $mx = max($mx, $t);
                $i++;
            }
            $s += $mx;

            $mx = 0;
            $t = 0;
            for ($j = $p - 2; $j >= $l; $j--) {
                $t += $nums[$j];
                $mx = max($mx, $t);
            }
            $s += $mx;

            $ans = max($ans, $s);
            $i = $q;
        }

        return $ans;
    }
}
