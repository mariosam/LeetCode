<?php
/**
 * @version PHP 8.2.20
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class FindKthBitInNthBinaryString {    

    /**
     * @param Integer $n
     * @param Integer $k
     * @return String
     */
    function findKthBit($n, $k) {
        $dfs = function($n, $k) use (&$dfs) {
            if ($k == 1) return 0;
            if (($k & ($k - 1)) == 0) return 1;
            $m = 1 << $n;
            if ($k * 2 < $m - 1) {
                return $dfs($n - 1, $k);
            } else {
                return $dfs($n - 1, $m - $k) ^ 1;
            }
        };
        return chr(ord('0') + $dfs($n, $k));
    }

}
