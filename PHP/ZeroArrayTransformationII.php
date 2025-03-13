<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class ZeroArrayTransformationII {    

    /**
     * @param Integer[] $nums
     * @param Integer[][] $queries
     * @return Integer
     */
    function minZeroArray($nums, $queries) {
        $line = array_fill(0, count($nums) + 1, 0);
        $decrement = 0;
        $k = 0;

        for ($i = 0; $i < count($nums); $i++) {
            while ($decrement + $line[$i] < $nums[$i]) {
                if ($k == count($queries)) {
                    return -1;
                }
                list($l, $r, $val) = $queries[$k++];
                if ($r < $i) {
                    continue;
                }
                $line[max($l, $i)] += $val;
                $line[$r + 1] -= $val;
            }
            $decrement += $line[$i];
        }
        return $k;
    }
}
