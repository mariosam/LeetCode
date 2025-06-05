<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class LexicographicallySmallestEquivalentString {    

    /**
     * @param String $s1
     * @param String $s2
     * @param String $baseStr
     * @return String
     */
    function smallestEquivalentString($s1, $s2, $baseStr) {
        $p = range(0, 25);

        $find = function($x) use (&$p, &$find) {
            if ($p[$x] != $x) {
                $p[$x] = $find($p[$x]);
            }
            return $p[$x];
        };

        for ($i = 0; $i < strlen($s1); $i++) {
            $x = ord($s1[$i]) - ord('a');
            $y = ord($s2[$i]) - ord('a');
            $px = $find($x);
            $py = $find($y);
            if ($px < $py) {
                $p[$py] = $px;
            } else {
                $p[$px] = $py;
            }
        }

        $result = '';
        for ($i = 0; $i < strlen($baseStr); $i++) {
            $c = ord($baseStr[$i]) - ord('a');
            $result .= chr($find($c) + ord('a'));
        }

        return $result;
    }

}
