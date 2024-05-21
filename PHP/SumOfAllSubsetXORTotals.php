<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class SumOfAllSubsetXORTotals {    

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function subsetXORSum($nums) {
        $n = count($nums);
        $ans = 0;

        for ($i = 0; $i < (1 << $n); ++$i) {
            $s = 0;
            for ($j = 0; $j < $n; ++$j) {
                if (($i >> $j & 1) == 1) {
                    $s ^= $nums[$j];
                }
            }
            $ans += $s;
        }

        return $ans;
    }

}
