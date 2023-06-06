<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class SignOfTheProductOfAnArray {    

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function arraySign($nums) {
        $res = 1;

        foreach ($nums as $a) {
            if ($a == 0) { return 0; }

            $res *= ($a > 0) ? 1 : -1;
        }

        return $res;
    }

}
