<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MonotonicArray {    

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function isMonotonic($nums) {
        $isIncr = false;
        $isDecr = false;
        for ($i = 1; $i < count($nums); $i++) {
            if ($nums[$i] < $nums[$i - 1]) {
                $isIncr = true;
            } elseif ($nums[$i] > $nums[$i - 1]) {
                $isDecr = true;
            }
            if ($isIncr && $isDecr) {
                return false;
            }
        }
        return true;
    }

}
