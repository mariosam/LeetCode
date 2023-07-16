<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class LongestArithmeticSubsequenceOfGivenDifference {    

    /**
     * @param Integer[] $arr
     * @param Integer $difference
     * @return Integer
     */
    function longestSubsequence($arr, $difference) {
        $dp = array();
        $ans = 1;
        
        foreach ($arr as $num) {
            $dp[$num] = ($dp[$num - $difference] ?? 0) + 1;
            $ans = max($ans, $dp[$num]);
        }

        return $ans;
    }

}
