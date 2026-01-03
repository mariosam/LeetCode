<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class NumberOfWaysToPaintN×3Grid {    

    /**
     * @param Integer $n
     * @return Integer
     */
    function numOfWays($n) {
        $mod = 1000000007;
        $aba = 6;
        $abc = 6;

        for ($i = 0; $i < $n - 1; $i++) {
            $tAba = ($aba * 3 + $abc * 2) % $mod;
            $tAbc = ($aba * 2 + $abc * 2) % $mod;
            $aba = $tAba;
            $abc = $tAbc;
        }

        return ($aba + $abc) % $mod;
    }

}
