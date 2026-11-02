<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimumMovesToEqualArrayElements {    

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function minMoves($nums) {
        if (count($nums) == 0) {
            return 0;
        }
        sort($nums);
        $minNum = $nums[0];
        $ans = 0;

        foreach ($nums as $num) {
            $ans += $num - $minNum;
        }
        return $ans;
    }
}
