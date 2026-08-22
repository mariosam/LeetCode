<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class KthSmallestAmountWithSingleDenominationCombination {    

    /**
     * @param Integer[] $coins
     * @param Integer $k
     * @return Integer
     */
    function findKthSmallest($coins, $k) {
        $n = count($coins);
        $M = 1 << $n;
        $lcm = array_fill(0, $M, 0);
        $lcm[0] = 1;

        $gcd = function($a, $b) {
            while ($a > 0) {
                $tmp = $a;
                $a = $b % $a;
                $b = $tmp;
            }
            return $b;
        };

        for ($i = 0; $i < $n; $i++) {
            $v = $coins[$i];

            for ($j = 0; $j < (1 << $i); $j++) {
                $g = $gcd($lcm[$j], $v);
                $lcm[$j | (1 << $i)] =
                    intdiv($v, $g) * $lcm[$j];
            }
        }
        $l = 1;
        $r = $coins[0] * $k;

        while ($l <= $r) {
            $md = intdiv($l + $r, 2);
            $cnt = 0;

            for ($i = 1; $i < $M; $i++) {
                if (substr_count(decbin($i), '1') % 2 == 0) {
                    $cnt -= intdiv($md, $lcm[$i]);
                } else {
                    $cnt += intdiv($md, $lcm[$i]);
                }
            }

            if ($cnt >= $k) {
                $r = $md - 1;
            } else {
                $l = $md + 1;
            }
        }
        return $l;
    }

}
