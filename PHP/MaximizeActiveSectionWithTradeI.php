<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MaximizeActiveSectionWithTradeI {    

    /**
     * @param String $s
     * @return Integer
     */
    function maxActiveSectionsAfterTrade($s) {
        $n = strlen($s);
        $ans = 0;
        $i = 0;
        $pre = PHP_INT_MIN;
        $mx = 0;

        while ($i < $n) {
            $j = $i + 1;

            while ($j < $n && $s[$j] === $s[$i]) {
                $j++;
            }
            $cur = $j - $i;

            if ($s[$i] === '1') {
                $ans += $cur;
            } else {
                $mx = max($mx, $pre + $cur);
                $pre = $cur;
            }
            $i = $j;
        }
        return $ans + $mx;
    }
}
