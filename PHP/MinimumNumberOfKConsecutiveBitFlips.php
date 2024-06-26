<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimumNumberOfKConsecutiveBitFlips {    

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function minKBitFlips($nums, $k) {
        $n = count($nums);
        $d = array_fill(0, $n + 1, 0);
        $ans = 0;
        $s = 0;

        for ($i = 0; $i < $n; $i++) {
            $s += $d[$i];
            if ($s % 2 == $nums[$i] % 2) {
                if ($i + $k > $n) {
                    return -1;
                }
                $d[$i]++;
                $d[$i + $k]--;
                $s++;
                $ans++;
            }
        }
        return $ans;
    }
}
