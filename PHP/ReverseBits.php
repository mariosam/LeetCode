<?php
/**
 * @version PHP 8.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class ReverseBits {    

    /**
     * @param Integer $n
     * @return Integer
     */
    function reverseBits($n) {
        $res = 0;
        for ($i = 0; $i < 32; $i++) {
            $res = ($n & 1) | ($res << 1);
            $n >>= 1;
        }
        return $res;
    }

}
