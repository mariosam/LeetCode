<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class IsSubsequence {    

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isSubsequence($s, $t) {
        $sIdx = 0;
        $tIdx = 0;

        while ($sIdx < strlen($s) && $tIdx < strlen($t)) {

            if ($s [$sIdx] === $t [$tIdx]) {
                $sIdx ++;
            }

            $tIdx ++;
        }

        return $sIdx === strlen($s);
    }

}

