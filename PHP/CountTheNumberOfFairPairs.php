<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CountTheNumberOfFairPairs {    

    /**
     * @param Integer[] $nums
     * @param Integer $lower
     * @param Integer $upper
     * @return Integer
     */
    function countFairPairs($nums, $lower, $upper) {
        sort($nums);
        return $this->countLess($nums, $upper) - $this->countLess($nums, $lower - 1);
    }

    function countLess(array $nums, int $sum): int {
        $res = 0;
        $j = count($nums) - 1;

        for ($i = 0; $i < $j; $i++) {
            while ($i < $j && $nums[$i] + $nums[$j] > $sum) {
                $j--;
            }
            $res += $j - $i;
        }

        return $res;
    }

}
