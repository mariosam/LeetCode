<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class DivideArrayIntoEqualPairs {    

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function divideArray($nums) {
        $cnt = array_fill(0, 510, 0);

        foreach ($nums as $x) {
            $cnt[$x]++;
        }

        foreach ($cnt as $v) {
            if ($v % 2 != 0) {
                return false;
            }
        }
        return true;
    }

}
