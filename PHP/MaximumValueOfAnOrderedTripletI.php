<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MaximumValueOfAnOrderedTripletI {    

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maximumTripletValue($nums) {
        $n = count($nums);
        $res = 0;

        for ($i = 0; $i < $n - 2; $i++) {
            for ($j = $i + 1; $j < $n - 1; $j++) {
                for ($k = $j + 1; $k < $n; $k++) {
                    if ($nums[$i] < 0 && $nums[$j] < 0 && $nums[$k] < 0) {
                        continue;
                    }
                    $res = max($res, ($nums[$i] - $nums[$j]) * $nums[$k]);
                }
            }
        }

        return $res;
    }
}
