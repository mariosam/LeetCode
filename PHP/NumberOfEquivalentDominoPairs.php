<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class NumberOfEquivalentDominoPairs {    

   /**
     * @param Integer[][] $dominoes
     * @return Integer
     */
    function numEquivDominoPairs($dominoes) {
        $cnt = array_fill(0, 100, 0);
        $res = 0;

        foreach ($dominoes as $v) {
            $a = min($v[0], $v[1]);
            $b = max($v[0], $v[1]);
            $k = $a * 10 + $b;
            $res += $cnt[$k];
            $cnt[$k]++;
        }

        return $res;
    }

}
