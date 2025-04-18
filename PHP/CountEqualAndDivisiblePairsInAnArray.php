<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CountEqualAndDivisiblePairsInAnArray {    

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function countPairs($nums, $k) {
        $map = [];

        foreach ($nums as $i => $v) {
            if (!isset($map[$v])) {
                $map[$v] = [];
            }
            $map[$v][] = $i;
        }

        $result = 0;
        foreach ($map as $indices) {
            $len = count($indices);
            for ($i = 0; $i < $len - 1; $i++) {
                for ($j = $i + 1; $j < $len; $j++) {
                    if (($indices[$i] * $indices[$j]) % $k == 0) {
                        $result++;
                    }
                }
            }
        }

        return $result;
    }
}
