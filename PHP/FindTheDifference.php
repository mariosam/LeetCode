<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class FindTheDifference {    

    /**
     * @param String $s
     * @param String $t
     * @return String
     */
    function findTheDifference($s, $t) {
        $c = 0;

        for ($i = 0; $i < strlen($s); $i++) {
            $c ^= ord($s[$i]);
        }

        for ($i = 0; $i < strlen($t); $i++) {
            $c ^= ord($t[$i]);
        }

        return chr($c);
    }

}
