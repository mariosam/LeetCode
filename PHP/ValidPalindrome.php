<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class ValidPalindrome {    

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        $s = strtolower( preg_replace("/[^a-zA-Z0-9]+/", "", $s) );

        return $s == strrev($s);
    }

}
