<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class FindWordsThatCanBeFormedByCharacters {    

    /**
     * @param String[] $words
     * @param String $chars
     * @return Integer
     */
    function countCharacters($words, $chars) {
        $cnt = [];
        $res = 0;

        foreach (str_split($chars) as $ch) {
            $cnt[$ch] = isset($cnt[$ch]) ? $cnt[$ch] + 1 : 1;
        }

        foreach ($words as $word) {
            $tmp = [];
            $match = true;

            foreach (str_split($word) as $ch) {
                $tmp[$ch] = isset($tmp[$ch]) ? $tmp[$ch] + 1 : 1;
                if ($tmp[$ch] > $cnt[$ch]) {
                    $match = false;
                    break;
                }
            }

            if ($match) {
                $res += strlen($word);
            }
        }

        return $res;
    }
}
