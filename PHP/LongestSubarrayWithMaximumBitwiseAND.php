<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class LongestSubarrayWithMaximumBitwiseAND {    

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function longestSubarray($nums) {
        $n = count($nums);

        $max = $nums[0];
        for ($i = 0; $i < $n; $i++) {
            $max = max($max, $nums[$i]);
        }

        $res = 0;
        $curLen = 0;
        for ($i = 0; $i < $n; $i++) {
            if ($nums[$i] == $max) {
                $curLen++;
            } else {
                $curLen = 0;
            }
            $res = max($res, $curLen);
        }
        return $res;
    }

}
