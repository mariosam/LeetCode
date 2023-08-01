<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimumCostToMakeArrayEqual {    

    /**
     * @param Integer[] $nums
     * @param Integer[] $cost
     * @return Integer
     */
    function minCost($nums, $cost) {
        $n = count($nums);
        $arr = [];
    
        for ($i = 0; $i < $n; $i++) {
            $a = $nums[$i];
            $b = $cost[$i];
            $arr[] = ['a' => $a, 'b' => $b];
        }
    
        usort($arr, function ($x, $y) {
            return $x['a'] - $y['a'];
        });
    
        $f = array_fill(0, $n + 1, 0);
        $g = array_fill(0, $n + 1, 0);
    
        for ($i = 1; $i <= $n; $i++) {
            $a = $arr[$i - 1]['a'];
            $b = $arr[$i - 1]['b'];
            $f[$i] = $f[$i - 1] + $a * $b;
            $g[$i] = $g[$i - 1] + $b;
        }
    
        $ans = PHP_INT_MAX;
    
        for ($i = 1; $i <= $n; $i++) {
            $a = $arr[$i - 1]['a'];
            $l = $a * $g[$i - 1] - $f[$i - 1];
            $r = $f[$n] - $f[$i] - $a * ($g[$n] - $g[$i]);
            $ans = min($ans, $l + $r);
        }
    
        return $ans;
      }
}
