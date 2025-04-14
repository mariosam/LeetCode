<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CountGoodTriplets {    

    /**
     * @param Integer[] $arr
     * @param Integer $a
     * @param Integer $b
     * @param Integer $c
     * @return Integer
     */
    function countGoodTriplets($arr, $a, $b, $c) {
        $n = count($arr);
        $count = 0;

        for ($i = 0; $i < $n; $i++) {
            for ($j = $i + 1; $j < $n; $j++) {
                if (abs($arr[$i] - $arr[$j]) > $a) continue;
                for ($k = $j + 1; $k < $n; $k++) {
                    if (abs($arr[$j] - $arr[$k]) > $b || abs($arr[$i] - $arr[$k]) > $c) continue;
                    $count++;
                }
            }
        }

        return $count;
    }
}
