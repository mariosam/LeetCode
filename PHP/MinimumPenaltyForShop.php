<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimumPenaltyForShop {    

    /**
     * @param String $customers
     * @return Integer
     */
    function bestClosingTime($customers) {
        $n = strlen($customers);
        $s = array_fill(0, $n + 1, 0);
        for ($i = 0; $i < $n; ++$i) {
            $s[$i + 1] = $s[$i] + ($customers[$i] === 'Y' ? 1 : 0);
        }
        $ans = 0;
        $cost = 1 << 30;
        for ($j = 0; $j <= $n; ++$j) {
            $t = $j - $s[$j] + $s[$n] - $s[$j];
            if ($cost > $t) {
                $ans = $j;
                $cost = $t;
            }
        }
        return $ans;
    }
}
