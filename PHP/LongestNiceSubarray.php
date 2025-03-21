<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class LongestNiceSubarray {    

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function longestNiceSubarray($nums) {
        $n = count($nums);
        $i = 0;
        $mask = 0;
        $res = 0;

        for ($j = 0; $j < $n; $j++) {
            $e = $nums[$j];
            while (($mask & $e) !== 0) {
                $mask ^= $nums[$i];
                $i++;
            }
            $mask |= $e;
            $res = max($res, $j - $i + 1);
        }
        return $res;
    }

}
