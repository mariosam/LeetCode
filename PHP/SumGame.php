<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class SumGame {    

    /**
     * @param String $num
     * @return Boolean
     */
    function sumGame($num) {
        $cnt1 = 0;
        $cnt2 = 0;
        $sum1 = 0;
        $sum2 = 0;
        $n = strlen($num);

        for ($i = 0; $i < intdiv($n, 2); $i++) {
            if ($num[$i] === '?') {
                $cnt1++;
            } else {
                $sum1 += ord($num[$i]) - ord('0');
            }
        }

        for ($i = intdiv($n, 2); $i < $n; $i++) {
            if ($num[$i] === '?') {
                $cnt2++;
            } else {
                $sum2 += ord($num[$i]) - ord('0');
            }
        }

        if (($cnt1 + $cnt2) % 2 !== 0) {
            return true;
        }
        $sub = 9 * ($cnt1 - $cnt2) / 2 + ($sum1 - $sum2);
        return $sub != 0;
    }

}
