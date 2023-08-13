<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class LongestArithmeticSubsequence {    

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function longestArithSeqLength($nums) {
        $n = count($nums);
        $f = [];
        for ($i = 0; $i < $n; $i++) {
            $f[$i] = array_fill(0, 1001, 0);
        }

        $ans = 0;
        for ($i = 1; $i < $n; $i++) {
            for ($k = 0; $k < $i; $k++) {
                $j = $nums[$i] - $nums[$k] + 500;
                $f[$i][$j] = max($f[$i][$j], $f[$k][$j] + 1);
                $ans = max($ans, $f[$i][$j]);
            }
        }

        return $ans + 1;
    }

}
