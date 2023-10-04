<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class PredictTheWinner {    

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function PredictTheWinner($nums) {
        $n = count($nums);
        $dp = array_fill(0, $n, array_fill(0, $n, 0));

        for ($i = 0; $i < $n; $i++) {
            $dp[$i][$i] = $nums[$i];
        }

        for ($len = 1; $len < $n; $len++) {
            for ($i = 0; $i < $n - $len; $i++) {
                $j = $i + $len;
                $dp[$i][$j] = max($nums[$i] - $dp[$i + 1][$j], $nums[$j] - $dp[$i][$j - 1]);
            }
        }

        return $dp[0][$n - 1] >= 0;
    }

}
