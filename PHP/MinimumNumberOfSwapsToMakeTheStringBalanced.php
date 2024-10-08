<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimumNumberOfSwapsToMakeTheStringBalanced {    

    /**
     * @param String $s
     * @return Integer
     */
    function minSwaps($s) {
        $unmatched = 0;

        for ($i = 0; $i < strlen($s); $i++) {
            if ($s[$i] == '[') {
                $unmatched++;
            } elseif ($unmatched > 0) {
                // $s[$i] == ']' and there's a match
                $unmatched--;
            }
        }

        return (int)(($unmatched + 1) / 2);
    }
}
