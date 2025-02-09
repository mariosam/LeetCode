<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CountNumberOfBadPairs {    

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function countBadPairs($nums) {
        $n = count($nums);
        $ans = 0;
        $counter = [];

        for ($i = $n - 1; $i >= 0; $i--) {
            $diff = $nums[$i] - $i;
            if (isset($counter[$diff])) {
                $ans += $counter[$diff];
            }
            $counter[$diff] = ($counter[$diff] ?? 0) + 1;
        }

        return ($n * ($n - 1) / 2) - $ans;
    }

}
