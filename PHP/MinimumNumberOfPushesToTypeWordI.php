<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimumNumberOfPushesToTypeWordI {    

    /**
     * @param String $word
     * @return Integer
     */
    function minimumPushes($word) {
        $len = strlen($word);

        if ($len <= 8) {
            return $len;
        } elseif ($len <= 16) {
            return 8 + ($len - 8) * 2;
        } elseif ($len <= 24) {
            return 8 + 8 * 2 + ($len - 16) * 3;
        } else {
            return 8 + 8 * 2 + 8 * 3 + ($len - 24) * 4;
        }
    }
}
