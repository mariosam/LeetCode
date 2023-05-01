<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class LongestPalindromicSubsequence {    

    /**
     * @param String $s
     * @return String
     */
    function longestPalindromeSubseq($s) {
        $dp = array();
        for ($i = 0; $i <= strlen($s); ++$i) {
            for ($j = 0; $j <= strlen($s); ++$j) {
                $dp[$i][$j] = 0;
            }
            $dp[$i][0] = 1;
        }

        for ($i=strlen($s)-1; $i >= 0; $i--) {
            for ($j = $i+1; $j < strlen($s); $j++) {
                if ($s[$i] == $s[$j]) {
                    $dp[$i][$j] = $dp[$i + 1][$j - 1] + 2;
                } else {
                    if (!isset($dp[$i][$j])) $dp[$i][$j] = 1;
                    $dp[$i][$j] = max($dp[$i + 1][$j], $dp[$i][$j - 1]);
                }
            }
        }

        return $dp[0][strlen($s)-1];
    }

}
