<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CheckifArrayIsSortedAndRotated {    

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function check($nums) {
        $countOutOfOrder = 0;
        $n = count($nums);

        for ($i = 0; $i < $n; ++$i) {
            if ($nums[$i] > $nums[($i + 1) % $n]) {
                ++$countOutOfOrder;
            }
        }
        return $countOutOfOrder <= 1;
    }

}
