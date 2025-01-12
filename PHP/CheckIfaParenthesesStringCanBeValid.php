<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CheckIfaParenthesesStringCanBeValid {    

    /**
     * @param String $s
     * @param String $locked
     * @return Boolean
     */
    function canBeValid($s, $locked) {
        if (strlen($s) % 2 !== 0) {
            return false;
        }

        $total = $open = $closed = 0;
        for ($i = strlen($s) - 1; $i >= 0; $i--) {
            if ($locked[$i] === '0') {
                $total++;
            } elseif ($s[$i] === '(') {
                $open++;
            } elseif ($s[$i] === ')') {
                $closed++;
            }
            if ($total - $open + $closed < 0) {
                return false;
            }
        }

        $total = $open = $closed = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            if ($locked[$i] === '0') {
                $total++;
            } elseif ($s[$i] === '(') {
                $open++;
            } elseif ($s[$i] === ')') {
                $closed++;
            }
            if ($total + $open - $closed < 0) {
                return false;
            }
        }

        return true;
    }

}
