<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class PalindromeNumber {    

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        //se for negativo
        if ( $x < 0 ) return false;
    
        //compara o original com a copia invertida
        return $x == strrev($x);
    }

}
