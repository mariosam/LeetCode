<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CountPartitionsWithEvenSumDifference {    

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function countPartitions($nums) {
        $n = count($nums);
        $p = array_fill(0, $n, 0);

        $p[0] = $nums[0];
        for ($i = 1; $i < $n; $i++) {
            $p[$i] = $p[$i - 1] + $nums[$i];
        }

        $res = 0;
        for ($i = 0; $i < $n - 1; $i++) {
            if ((($p[$n - 1] - $p[$i]) - $p[$i]) % 2 == 0) {
                $res++;
            }
        }
        return $res;
    }
}
