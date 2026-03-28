<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class FindTheStringWithLCP {    

    /**
     * @param Integer[][] $lcp
     * @return String
     */
    function findTheString($lcp) {
        $n = count($lcp);
        $s = array_fill(0, $n, null);

        $i = 0;
        for ($c = ord('a'); $c <= ord('z'); $c++) {
            while ($i < $n && $s[$i] !== null) {
                $i++;
            }
            if ($i == $n) break;

            for ($j = $i; $j < $n; $j++) {
                if ($lcp[$i][$j] > 0) {
                    $s[$j] = chr($c);
                }
            }
        }

        foreach ($s as $ch) {
            if ($ch === null) return "";
        }

        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n; $j++) {
                if ($s[$i] === $s[$j]) {
                    if ($i == $n - 1 || $j == $n - 1) {
                        if ($lcp[$i][$j] != 1) return "";
                    } else {
                        if ($lcp[$i][$j] != $lcp[$i+1][$j+1] + 1) return "";
                    }
                } else {
                    if ($lcp[$i][$j] != 0) return "";
                }
            }
        }

        return implode('', $s);
    }
}
