<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class LongestSubsequenceWithNonZeroBitwiseXOR {    

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function longestSubsequence($nums) {
        $xor = 0;
        $cnt0 = 0;
        $n = count($nums);

        foreach ($nums as $x) {
            $xor ^= $x;
            if ($x == 0) {
                $cnt0++;
            }
        }

        if ($xor != 0) {
            return $n;
        }
        return $cnt0 == $n ? 0 : $n - 1;
    }

}
