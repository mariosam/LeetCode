<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class LongestBalancedSubstringI {    

    /**
     * @param String $s
     * @return Integer
     */
    function longestBalanced($s) {
        $n = strlen($s);
        $ans = 0;

        for ($i = 0; $i < $n; $i++) {
            $cnt = array_fill(0, 26, 0);
            $mx = 0;
            $v = 0;

            for ($j = $i; $j < $n; $j++) {
                $c = ord($s[$j]) - ord('a');

                $cnt[$c]++;
                if ($cnt[$c] == 1) {
                    $v++;
                }

                $mx = max($mx, $cnt[$c]);

                if ($mx * $v == $j - $i + 1) {
                    $ans = max($ans, $j - $i + 1);
                }
            }
        }

        return $ans;
    }

}
