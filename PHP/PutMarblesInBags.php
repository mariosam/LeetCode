<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class PutMarblesInBags {    

    /**
     * @param Integer[] $weights
     * @param Integer $k
     * @return Integer
     */
    function putMarbles($weights, $k) {
        $ans = 0;
        $n = count($weights);
        $arr = array();

        for ($i = 0; $i < $n - 1; $i++) {
            $arr[$i] = $weights[$i] + $weights[$i + 1];
        }
        
        sort($arr);
        for ($i = 0; $i < $k - 1; $i++) {
            $ans += $arr[$n - 2 - $i] - $arr[$i];
        }
        
        return $ans;
    }

}
