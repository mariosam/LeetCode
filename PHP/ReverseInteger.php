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
        $result = 0;

        while ( $x != 0 ) {
            $pop = $x % 10;
            $x /= 10;
            if ( $result > PHP_INT_MAX/10 || ( $result == PHP_INT_MAX/10 && $pop > 7 ) ) return 0;
            if ( $result < PHP_INT_MIN/10 || ( $result == PHP_INT_MIN/10 && $pop < -8 ) ) return 0;
            $result = $result*10 + $pop;
        }

        return $result;
    }

}
