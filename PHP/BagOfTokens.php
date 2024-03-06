<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class BagOfTokens {    

    /**
     * @param Integer[] $tokens
     * @param Integer $power
     * @return Integer
     */
    function bagOfTokensScore($tokens, $power) {
        sort($tokens);
        $i = 0;
        $j = count($tokens) - 1;
        $ans = 0;
        $t = 0;
        while ($i <= $j) {
            if ($power >= $tokens[$i]) {
                $power -= $tokens[$i];
                $i++;
                $t++;
                $ans = max($ans, $t);
            } elseif ($t > 0) {
                $power += $tokens[$j];
                $j--;
                $t--;
            } else {
                break;
            }
        }
        return $ans;
    }

}
