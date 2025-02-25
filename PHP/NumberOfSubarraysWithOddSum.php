<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class NumberOfSubarraysWithOddSum {    

    /**
     * @param Integer[] $arr
     * @return Integer
     */
    function numOfSubarrays($arr) {
        $cnt_even = 1; 
        $cnt_odd = 0; 
        $prefix = 0; 
        $res = 0;
        $MOD = 1000000007;

        foreach ($arr as $a) {
            $prefix += $a;
            if ($prefix % 2 == 0) {
                $res = ($res + $cnt_odd) % $MOD;
                $cnt_even++;
            } else {
                $res = ($res + $cnt_even) % $MOD;
                $cnt_odd++;
            }
        }
        return $res;
    }

}
