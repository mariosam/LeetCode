<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MaximumNumberOfDistinctElementsAfterOperations {    

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function maxDistinctElements($nums, $k) {
        sort($nums);
        $ans = 0;
        $pre = PHP_INT_MIN;

        foreach ($nums as $x) {
            $cur = min($x + $k, max($x - $k, $pre + 1));
            if ($cur > $pre) {
                $ans++;
                $pre = $cur;
            }
        }

        return $ans;
    }
}
