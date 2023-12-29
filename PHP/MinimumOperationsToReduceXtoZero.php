<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimumOperationsToReduceXtoZero {    

    /**
     * @param Integer[] $nums
     * @param Integer $x
     * @return Integer
     */
    function minOperations($nums, $x) {
        $x = -$x;
        foreach ($nums as $v) {
            $x += $v;
        }
        $ans = 1 << 30;
        $s = 0;
        $n = count($nums);
        $j = 0;
        
        for ($i = 0; $i < $n; $i++) {
            $s += $nums[$i];
            
            while ($j <= $i && $s > $x) {
                $s -= $nums[$j];
                $j++;
            }
            
            if ($s == $x) {
                $ans = min($ans, $n - ($i - $j + 1));
            }
        }
        
        if ($ans == 1 << 30) {
            return -1;
        }
        
        return $ans;
    }
}
