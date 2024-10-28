<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class LongestSquareStreakinAnArray {    

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function longestSquareStreak($nums) {
        sort($nums);
        $map = [];
        $result = -1;

        foreach ($nums as $x) {
            $perfect = (int) sqrt($x);
            if ($perfect * $perfect === $x && array_key_exists($perfect, $map)) {
                $streak = $map[$perfect] + 1;
                $map[$x] = $streak;
                $result = max($result, $streak);
            } else {
                $map[$x] = 1;
            }
        }

        return $result;
    }

}
