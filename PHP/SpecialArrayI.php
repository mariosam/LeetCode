<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class SpecialArrayI {    

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function isArraySpecial($nums) {
        for ($i = 1; $i < count($nums); $i++) {
            if (abs($nums[$i] - $nums[$i - 1]) % 2 == 0) {
                return false;
            }
        }
        return true;
    }

}
