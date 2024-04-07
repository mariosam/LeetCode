<?php
/**
 * @version PHP
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class ValidParenthesisString {

    /**
     * @param String $s
     * @return Boolean
     */
    function checkValidString($s) {
        $lo = 0;
        $hi = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            $c = $s[$i];
            if ($c === '(') {
                $lo++;
                $hi++;
            } else if ($c === ')') {
                $lo--;
                $hi--;
            } else {
                $lo--;
                $hi++;
            }
            if ($hi < 0) {
                break;
            }
            $lo = max($lo, 0);
        }
        return $lo === 0;
    }
}
