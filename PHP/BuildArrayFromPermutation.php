<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class BuildArrayFromPermutation {    

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function buildArray($nums) {
        $res = [];
        $n = count($nums);
        for ($i = 0; $i < $n; $i++) {
            $res[$i] = $nums[$nums[$i]];
        }
        return $res;
    }
}
