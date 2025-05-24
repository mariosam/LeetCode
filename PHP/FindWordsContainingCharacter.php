<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class FindWordsContainingCharacter {    

    /**
     * @param String[] $words
     * @param String $x
     * @return Integer[]
     */
    function findWordsContaining($words, $x) {
        $result = [];

        foreach ($words as $i => $word) {
            if (strpos($word, $x) !== false) {
                $result[] = $i;
            }
        }

        return $result;
    }

}
