<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimumPairRemovalToSortArrayI {    

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function minimumPairRemoval($nums) {
        $arr = $nums;
        $ans = 0;

        while (!$this->isNonDecreasing($arr)) {
            $k = 0;
            $s = $arr[0] + $arr[1];

            for ($i = 1; $i < count($arr) - 1; $i++) {
                $t = $arr[$i] + $arr[$i + 1];
                if ($s > $t) {
                    $s = $t;
                    $k = $i;
                }
            }

            $arr[$k] = $s;
            array_splice($arr, $k + 1, 1);
            $ans++;
        }

        return $ans;
    }

    private function isNonDecreasing(array $arr): bool {
        for ($i = 1; $i < count($arr); $i++) {
            if ($arr[$i] < $arr[$i - 1]) {
                return false;
            }
        }
        return true;
    }
}
