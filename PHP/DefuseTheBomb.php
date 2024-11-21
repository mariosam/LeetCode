<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class DefuseTheBomb {    

    /**
     * @param Integer[] $code
     * @param Integer $k
     * @return Integer[]
     */
    function decrypt($code, $k) {
        $n = count($code);
        $ans = array_fill(0, $n, 0);
        if ($k == 0) {
            return $ans;
        }

        $extendedCode = array_merge($code, $code);
        $l = $k > 0 ? 1 : $n + $k;
        $r = $k > 0 ? $k : $n - 1;

        $sum = 0;
        for ($i = $l; $i <= $r; $i++) {
            $sum += $extendedCode[$i];
        }

        for ($i = 0; $i < $n; $i++) {
            $ans[$i] = $sum;
            $sum -= $extendedCode[$l];
            $sum += $extendedCode[$r + 1];
            $l++;
            $r++;
        }

        return $ans;
    }

}
