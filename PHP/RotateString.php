<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class RotateString {    

    /**
     * @param String $s
     * @param String $goal
     * @return Boolean
     */
    function rotateString($s, $goal) {
        if (strlen($s) !== strlen($goal)) {
            return false;
        }
        $str = $s . $s;

        return strpos($str, $goal) !== false;
    }

}
