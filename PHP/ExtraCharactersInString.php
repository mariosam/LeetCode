<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class ExtraCharactersInString {    

    /**
     * @param String $s
     * @param String[] $dictionary
     * @return Integer
     */
    function minExtraChar($s, $dictionary) {
        $ss = array_flip($dictionary);
        $n = strlen($s);
        $f = array_fill(0, $n + 1, 0);

        for ($i = 1; $i <= $n; $i++) {
            $f[$i] = $f[$i - 1] + 1;
            for ($j = 0; $j < $i; $j++) {
                if (isset($ss[substr($s, $j, $i - $j)])) {
                    $f[$i] = min($f[$i], $f[$j]);
                }
            }
        }

        return $f[$n];
    }

}
