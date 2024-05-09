<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class ReversePrefixOfWord {    

    /**
     * @param String $word
     * @param String $ch
     * @return String
     */
    function reversePrefix($word, $ch) {
        $j = strpos($word, $ch);
        if ($j === false) {
            return $word;
        }

        $s = str_split($word);
        $i = 0;

        while ($i < $j) {
            $temp = $s[$i];
            $s[$i] = $s[$j];
            $s[$j] = $temp;
            $i++;
            $j--;
        }

        return implode('', $s);
    }

}
