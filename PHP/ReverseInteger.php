<?php
/**
 * @version PHP 8.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class ReverseInteger {    

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $rev = 0;

        while ($x != 0) {
            $pop = $x % 10;
            $x = (int) ($x / 10);
            
            if ($rev > (int)(PHP_INT_MAX / 10) || ($rev === (int)(PHP_INT_MAX / 10) && $pop > 7)) {
                return 0;
            }
            if ($rev < (int)(PHP_INT_MIN / 10) || ($rev === (int)(PHP_INT_MIN / 10) && $pop < -8)) {
                return 0;
            }
            
            $rev = $rev * 10 + $pop;
        }

        return $rev;
    }

}
