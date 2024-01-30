<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class NumberOfLaserBeamsInBank {    

    /**
     * @param String[] $bank
     * @return Integer
     */
    function numberOfBeams($bank) {
        if (!is_array($bank)) {
            die("Error: Input must be an array.");
        }

        $comb = function ($num1, $num2) {
            return $num1 * $num2;
        };

        $m = count($bank);
        $n = $m > 0 ? strlen($bank[0]) : 0;

        if ($m === 0 || $n === 0) {
            return 0;
        }

        $pre = 0;
        $res = 0;

        for ($j = 0; $j < $n; $j++) {
            if ($bank[0][$j] === '1') {
                $pre++;
            }
        }

        for ($i = 1; $i < $m; $i++) {
            $chk = 0;
            $cur = $bank[$i];

            for ($j = 0; $j < $n; $j++) {
                if ($cur[$j] === '1') {
                    $chk++;
                }
            }

            if ($chk) {
                $res += $comb($pre, $chk);
                $pre = $chk;
            }
        }

        return $res;
    }

}
