<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CountNumberOfNiceSubarrays {    

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function numberOfSubarrays($nums, $k) {
        $n = count($nums);
        $s = array_fill(0, $n + 1, 0);
        $cnt = array_fill(0, $n + 1, 0);
        $ans = 0;
        
        $cnt[$s[0]]++;
        for ($i = 1; $i <= $n; $i++) {
            $s[$i] = $s[$i - 1] + $nums[$i - 1] % 2;
            $cnt[$s[$i]]++;
        }
        
        for ($i = 1; $i <= $n; $i++) {
            if ($s[$i] >= $k) {
                $ans += $cnt[$s[$i] - $k];
            }
        }

        return $ans;
    }

}
