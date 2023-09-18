<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimumFlipsToMakeAorBequalC {    

    /**
     * @param Integer $a
     * @param Integer $b
     * @param Integer $c
     * @return Integer
     */
    function minFlips($a, $b, $c) {
        $res = 0;

        for ($i=0; $i <= 31; $i++) {
            if (($c & (1 << $i)) != 0) {
                if (($a & (1 << $i)) == 0 && ($b & (1 << $i)) == 0) {
                    $res++;
                }
            } else {
                if (($a & (1 << $i)) != 0) $res++;
                if (($b & (1 << $i)) != 0) $res++;
            }
        }
        
        return $res;
    }
}
