<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimumIndexOfValidSplit {    

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function minimumIndex($nums) {
        $freq = [];
        $x = $nums[0];

        foreach ($nums as $num) {
            $freq[$num] = ($freq[$num] ?? 0) + 1;
            if ($freq[$num] > ($freq[$x] ?? 0)) {
                $x = $num;
            }
        }

        $total = $freq[$x];
        $freq1 = 0;

        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] == $x) {
                $freq1++;
            }
            if ($freq1 * 2 > $i + 1 && ($total - $freq1) * 2 > (count($nums) - $i - 1)) {
                return $i;
            }
        }

        return -1;
    }
}
