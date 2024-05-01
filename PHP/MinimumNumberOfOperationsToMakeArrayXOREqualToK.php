<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimumNumberOfOperationsToMakeArrayXOREqualToK {    

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function minOperations($nums, $k) {
        $xor_sum = $k;
        foreach ($nums as $x) {
            $xor_sum ^= $x;
        }
        return substr_count(decbin($xor_sum), '1');
    }
}
