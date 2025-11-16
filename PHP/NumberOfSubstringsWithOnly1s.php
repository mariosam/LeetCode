<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class NumberOfSubstringsWithOnly1s {    

    /**
     * @param String $s
     * @return Integer
     */
    function numSub($s) {
        $count = 0;
        $sum = 0;
        $mod = 1000000007;

        for ($i = 0; $i < strlen($s); $i++) {
            if ($s[$i] === '1') {
                $sum++;
                $count = ($count + $sum) % $mod;
            } else {
                $sum = 0;
            }
        }

        return $count;
    }

}
