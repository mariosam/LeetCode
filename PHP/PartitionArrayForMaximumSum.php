<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class PartitionArrayForMaximumSum {    

    /**
     * @param Integer[] $arr
     * @param Integer $k
     * @return Integer
     */
    function maxSumAfterPartitioning($arr, $k) {
        $n = count($arr);
        $f = array_fill(0, $n + 1, 0);

        for ($i = 1; $i <= $n; $i++) {
            $mx = 0;
            for ($j = $i; $j > max(0, $i - $k); $j--) {
                $mx = max($mx, $arr[$j - 1]);
                $f[$i] = max($f[$i], $f[$j - 1] + $mx * ($i - $j + 1));
            }
        }

        return $f[$n];
    }

}
