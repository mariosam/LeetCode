<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CountTheNumberOfSpecialCharactersII {    

    /**
     * @param String $word
     * @return Integer
     */
    function numberOfSpecialChars($word) {
        $lowerLastOccurrence = [];
        $upperFirstOccurrence = [];
        $len = strlen($word);
        $ret = 0;

        for ($i = 0; $i < $len; $i++) {
            $c = $word[$i];
            if (ctype_lower($c)) {
                $lowerLastOccurrence[$c] = $i;
            } else {
                if (!isset($upperFirstOccurrence[$c])) {
                    $upperFirstOccurrence[$c] = $i;
                }
            }
        }

        for ($i = 0; $i < 26; $i++) {
            $c = chr($i + ord('A'));
            $c2 = chr($i + ord('a'));

            if (
                isset($upperFirstOccurrence[$c]) &&
                isset($lowerLastOccurrence[$c2]) &&
                $lowerLastOccurrence[$c2] < $upperFirstOccurrence[$c]
            ) {
                $ret++;
            }
        }
        return $ret;
    }

}
