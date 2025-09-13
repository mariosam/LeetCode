<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class FindMostFrequentVowelAndConsonant {    

   /**
     * @param String $s
     * @return Integer
     */
    function maxFreqSum($s) {
        $cnt = array_fill(0, 26, 0);
        $vowels = ['a','e','i','o','u'];

        for ($i = 0; $i < strlen($s); $i++) {
            $c = ord($s[$i]) - ord('a');
            $cnt[$c]++;
        }

        $a = 0;
        $b = 0;
        for ($i = 0; $i < 26; $i++) {
            $c = chr($i + ord('a'));
            if (in_array($c, $vowels)) {
                $a = max($a, $cnt[$i]);
            } else {
                $b = max($b, $cnt[$i]);
            }
        }

        return $a + $b;
    }

}
