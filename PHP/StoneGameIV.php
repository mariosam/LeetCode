<?php
/**
 * @version PHP 8.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class StoneGameIV {    

    /**
     * @param Integer $n
     * @return Boolean
     */
    function winnerSquareGame($n) {
        $f = array_fill(0, $n + 1, false);

        for ($i = 1; $i <= $n; $i++) {
            for ($j = 1; $j * $j <= $i; $j++) {
                if (!$f[$i - $j * $j]) {
                    $f[$i] = true;
                    break;
                }
            }
        }
        return $f[$n];
    }

}
