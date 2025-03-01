<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class ApplyOperationstoAnArray {    

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function applyOperations($nums) {
        $n = count($nums);
    
        for ($i = 0; $i < $n - 1; $i++) {
            if ($nums[$i] === $nums[$i + 1]) {
                $nums[$i] *= 2;
                $nums[$i + 1] = 0;
            }
        }

        $l = 0;
        for ($r = 0; $r < $n; $r++) {
            if ($nums[$r] !== 0) {
                list($nums[$l], $nums[$r]) = [$nums[$r], $nums[$l]];
                $l++;
            }
        }

        return $nums;
    }
}
