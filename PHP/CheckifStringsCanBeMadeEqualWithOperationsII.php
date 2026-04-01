<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CheckifStringsCanBeMadeEqualWithOperationsII {    

    /**
     * @param String $s1
     * @param String $s2
     * @return Boolean
     */
    function checkStrings($s1, $s2) {
        $cnt1 = array_fill(0, 2, array_fill(0, 26, 0));
        $cnt2 = array_fill(0, 2, array_fill(0, 26, 0));

        $n = strlen($s1);

        for ($i = 0; $i < $n; $i++) {
            $idx1 = ord($s1[$i]) - ord('a');
            $idx2 = ord($s2[$i]) - ord('a');

            $cnt1[$i % 2][$idx1]++;
            $cnt2[$i % 2][$idx2]++;
        }

        return $cnt1 === $cnt2;
    }

}
