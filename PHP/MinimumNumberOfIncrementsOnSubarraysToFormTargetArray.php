<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimumNumberOfIncrementsOnSubarraysToFormTargetArray {    

    /**
     * @param Integer[] $target
     * @return Integer
     */
    function minNumberOperations($target) {
        if (empty($target)) return 0;
        $ans = $target[0];
        for ($i = 1; $i < count($target); $i++) {
            if ($target[$i] > $target[$i - 1]) {
                $ans += $target[$i] - $target[$i - 1];
            }
        }
        return $ans;
    }
}
