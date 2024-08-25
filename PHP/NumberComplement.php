<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class NumberComplement {    

    /**
     * @param Integer $num
     * @return Integer
     */
    function findComplement($num) {
        $num ^= ((1 << (strlen(decbin($num)) - 1)) << 1) - 1;
        return $num;
    }

}
