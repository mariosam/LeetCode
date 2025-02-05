<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CheckIfOneStringSwapCanMakeStringsEqual {    

    /**
     * @param String $s1
     * @param String $s2
     * @return Boolean
     */
    function areAlmostEqual($s1, $s2) {
        $buf = [];

        for ($i = 0; $i < strlen($s1); $i++) {
            if ($s1[$i] !== $s2[$i]) {
                $buf[] = [$s1[$i], $s2[$i]];
                if (count($buf) > 2) {
                    return false;
                }
            }
        }

        if (count($buf) === 0) return true;
        if (count($buf) !== 2) return false;
        return $buf[0][0] === $buf[1][1] && $buf[0][1] === $buf[1][0];
    }

}
