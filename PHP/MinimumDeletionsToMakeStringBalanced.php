<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimumDeletionsToMakeStringBalanced {    

    /**
     * @param String $s
     * @return Integer
     */
    function minimumDeletions($s) {
        $n = strlen($s);
        $rightA = 0;

        for ($i = 0; $i < $n; $i++) {
            if ($s[$i] === 'a') {
                $rightA++;
            }
        }

        $leftB = 0;
        $res = $rightA;

        for ($i = 0; $i < $n; $i++) {
            if ($s[$i] === 'a') {
                $rightA--;
            } else {
                $leftB++;
            }
            $res = min($res, $leftB + $rightA);
        }

        return $res;
    }
}
