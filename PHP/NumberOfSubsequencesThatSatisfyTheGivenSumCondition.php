<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class NumberOfSubsequencesThatSatisfyTheGivenSumCondition {    

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function numSubseq($nums, $target) {
        sort($nums);
        $mod = 1000000007;
        $n = count($nums);

        $pows = array_fill(0, $n + 1, 1);
        for ($i = 1; $i <= $n; $i++) {
            $pows[$i] = ($pows[$i - 1] * 2) % $mod;
        }

        $answer = 0;
        $right = $n - 1;

        for ($left = 0; $left < $n; $left++) {
            while ($right >= $left && $nums[$left] + $nums[$right] > $target) {
                $right--;
            }
            if ($left <= $right) {
                $answer = ($answer + $pows[$right - $left]) % $mod;
            }
        }

        return $answer;
    }

}
