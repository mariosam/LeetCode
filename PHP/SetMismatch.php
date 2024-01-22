<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class SetMismatch {    

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function findErrorNums($nums) {
        $n = count($nums);
        $s1 = ($n * ($n + 1)) / 2;
        $s2 = 0;
        $s = 0;
        $set = [];
        
        foreach ($nums as $x) {
            if (!isset($set[$x])) {
                $set[$x] = true;
                $s2 += $x;
            }
            $s += $x;
        }

        return [$s - $s2, $s1 - $s2];
    }

}
