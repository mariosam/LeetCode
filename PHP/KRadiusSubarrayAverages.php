<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class KRadiusSubarrayAverages {    

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */
    function getAverages($nums, $k) {
        $n = count($nums);
        $s = array_fill(0, $n+1, 0);

        for ($i = 0; $i < $n; ++$i) {
            $s[$i + 1] = $s[$i] + $nums[$i];
        }

        $ans = array_fill(0, $n, -1);

        for ($i = 0; $i < $n; ++$i) {
            if ($i - $k >= 0 && $i + $k < $n) {
                $ans[$i] = (int)(($s[$i + $k + 1] - $s[$i - $k]) / ($k << 1 | 1));
            }
        }

        return $ans;
    }

}
