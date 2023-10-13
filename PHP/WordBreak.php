<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class WordBreak {    

    /**
     * @param String $s
     * @param String[] $wordDict
     * @return Boolean
     */
    function wordBreak($s, $wordDict) {
        $sLen = strlen($s);
        $dp = array_fill(0, $sLen + 1, false);
        $dp[0] = true;

        for ($i = 1; $i <= $sLen; $i++) {
            foreach ($wordDict as $word) {
                $l = strlen($word);
                if ($l <= $i && $word === substr($s, $i - $l, $l) && $dp[$i - $l]) {
                    $dp[$i] = true;
                    break; // Break the loop once a match is found
                }
            }
        }

        return $dp[$sLen];
    }
}
