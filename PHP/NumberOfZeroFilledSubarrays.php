<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class NumberOfZeroFilledSubarrays {    

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function zeroFilledSubarray($nums) {
        $zeros = 0;
        $ans = 0;

        foreach ($nums as $num) {
            $zeros = $num === 0 ? $zeros + 1 : 0;
            $ans += $zeros;
        }

        return $ans;
      }

}
