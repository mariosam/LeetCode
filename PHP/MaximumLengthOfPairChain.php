<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MaximumLengthOfPairChain {    

    /**
     * @param Integer[][] $pairs
     * @return Integer
     */
    function findLongestChain($pairs) {
        usort($pairs, function ($a, $b) {
            return $a[1] - $b[1];
        });

        $ans = 0;
        $cur = PHP_INT_MIN;

        foreach ($pairs as $p) {
            if ($cur < $p[0]) {
                $cur = $p[1];
                $ans++;
            }
        }

        return $ans;
    }
}
