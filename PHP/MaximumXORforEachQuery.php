<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MaximumXORforEachQuery {    

    /**
     * @param Integer[] $nums
     * @param Integer $maximumBit
     * @return Integer[]
     */
    function getMaximumXor($nums, $maximumBit) {
        $n = count($nums);
        $res = array_fill(0, $n, 0);
        $max = (1 << $maximumBit) - 1;
        $v = 0;

        foreach ($nums as $i => $x) {
            $v ^= $x;
            $res[$n - 1 - $i] = $max ^ $v;
        }

        return $res;
    }
}
