<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class FindTheMaximumNumberOfElementsInSubset {    

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maximumLength($nums) {
        $maxNum = max($nums);
        $count = [];

        foreach ($nums as $num) {
            $count[$num] = ($count[$num] ?? 0) + 1;
        }
        $ans = isset($count[1])
            ? $count[1] - (($count[1] % 2 == 0) ? 1 : 0)
            : 1;

        foreach ($nums as $num) {
            if ($num == 1) {
                continue;
            }
            $length = 0;
            $x = $num;

            while (
                $x <= $maxNum &&
                isset($count[$x]) &&
                $count[$x] >= 2
            ) {
                $length += 2;
                $x *= $x;
            }
            $ans = max($ans, $length + (isset($count[$x]) ? 1 : -1));
        }
        return $ans;
    }

}
