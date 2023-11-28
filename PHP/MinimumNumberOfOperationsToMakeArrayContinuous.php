<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimumNumberOfOperationsToMakeArrayContinuous {    

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function minOperations($nums) {
        sort($nums);
        $n = count($nums);
        $m = 1;
        for ($i = 1; $i < $n; $i++) {
            if ($nums[$i] !== $nums[$i - 1]) {
                $nums[$m] = $nums[$i];
                $m++;
            }
        }
        $ans = $n;
        for ($i = 0, $j = 0; $i < $m; $i++) {
            while ($j < $m && $nums[$j] - $nums[$i] <= $n - 1) {
                $j++;
            }
            $ans = min($ans, $n - ($j - $i));
        }
        return $ans;
    }
}
