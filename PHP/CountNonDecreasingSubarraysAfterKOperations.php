<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CountNonDecreasingSubarraysAfterKOperations {    

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function countNonDecreasingSubarrays($nums, $k) {
        $ans = 0;
        $cost = 0;
        $dq = [];

        for ($i = count($nums) - 1, $j = count($nums) - 1; $i >= 0; --$i) {
            $num = $nums[$i];
            $count = 1;

            while (!empty($dq) && $dq[count($dq) - 1][0] < $num) {
                [$nextNum, $nextCount] = array_pop($dq);
                $count += $nextCount;
                $cost += ($num - $nextNum) * $nextCount;
            }
            $dq[] = [$num, $count];

            while ($cost > $k) {
                [$rightmostNum, $rightmostCount] = array_shift($dq);
                $cost -= $rightmostNum - $nums[$j--];

                if ($rightmostCount > 1) {
                    array_unshift($dq, [$rightmostNum, $rightmostCount - 1]);
                }
            }
            $ans += $j - $i + 1;
        }
        return $ans;
    }

}
