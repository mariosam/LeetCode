<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class IsomorphicStrings {    

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isIsomorphic($s, $t) {
        for ( $i=0; $i < strlen($s); $i++ ) {
            if ( strpos($s, $s[$i]) != strpos($t, $t[$i]) ) {
                return false;
            }
        }
        
        return true;
    }

}
