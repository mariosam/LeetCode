<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimumNumberOfChangesToMakeBinaryStringBeautiful {    

    /**
     * @param String $s
     * @return Integer
     */
    function minChanges($s) {
        $ans = 0;
        $length = strlen($s);
        
        for ($i = 1; $i < $length; $i += 2) {
            if ($s[$i] !== $s[$i - 1]) {
                $ans++;
            }
        }
        
        return $ans;
    }
}
