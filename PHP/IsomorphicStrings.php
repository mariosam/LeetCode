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
        $sMap = [];
        $tMap = [];

        for ( $i=0; $i < strlen($s); $i++ ) {
            if ( $sMap[$t[$i]] != $tMap[$s[$i]] ) return false;
            $sMap[$t[$i]] = $i + 1;
            $tMap[$s[$i]] = $i + 1;
        }

        return true;
    }

}

