<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class LargestDivisibleSubset {    

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function largestDivisibleSubset($nums) {
        sort($nums);
        $subset = [];
        $result = [];

        for ($i = 0; $i < count($nums); $i++) {
            $subset[$i] = [$nums[$i]];
            for ($j = $i - 1; $j >= 0; $j--) {
                if (count($subset[$i]) > count($subset[$j])) continue;
                $satisfied = true;
                foreach ($subset[$j] as $k) {
                    if ($k % $nums[$i] != 0 && $nums[$i] % $k != 0) {
                        $satisfied = false;
                        break;
                    }
                }
                if ($satisfied) {
                    $subset[$i] = array_merge([$nums[$i]], $subset[$j]);
                }
            }
            if (count($subset[$i]) > count($result)) {
                $result = $subset[$i];
            }
        }

        return $result;
    }

}
