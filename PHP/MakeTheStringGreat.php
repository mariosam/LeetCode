<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MakeTheStringGreat {    

    /**
     * @param String $s
     * @return String
     */
    function makeGood($s) {
        $stack = [];
        for ($i = 0; $i < strlen($s); $i++) {
            if (!empty($stack) && (ord($s[$i]) === ord(end($stack)) + 32 || ord($s[$i]) === ord(end($stack)) - 32)) {
                array_pop($stack);
                continue;
            }
            array_push($stack, $s[$i]);
        }
        return implode('', $stack);
    }

}
