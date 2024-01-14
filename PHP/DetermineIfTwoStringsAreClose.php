<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class DetermineIfTwoStringsAreClose {    

    /**
     * @param String $word1
     * @param String $word2
     * @return Boolean
     */
    function closeStrings($word1, $word2) {
        $cnt1 = array_fill(0, 26, 0);
        $cnt2 = array_fill(0, 26, 0);

        foreach (str_split($word1) as $c) {
            $cnt1[ord($c) - ord('a')]++;
        }

        foreach (str_split($word2) as $c) {
            $cnt2[ord($c) - ord('a')]++;
        }

        if (!array_reduce(array_map(function ($v1, $v2) {
            return ($v1 == 0) == ($v2 == 0);
        }, $cnt1, $cnt2), function ($carry, $item) {
            return $carry && $item;
        }, true)) {
            return false;
        }

        sort($cnt1);
        sort($cnt2);

        return $cnt1 == $cnt2;
    }

}
