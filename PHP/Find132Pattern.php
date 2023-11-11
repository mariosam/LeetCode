<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class Find132Pattern {    

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function find132pattern($nums) {
        $vk = -(1 << 30);
        $stk = [];

        for ($i = count($nums) - 1; $i >= 0; $i--) {
            if ($nums[$i] < $vk) {
                return true;
            }

            while (count($stk) > 0 && $stk[count($stk) - 1] < $nums[$i]) {
                $vk = $stk[count($stk) - 1];
                array_pop($stk);
            }

            array_push($stk, $nums[$i]);
        }

        return false;
    }

}
