<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class FindNumbersWithEvenNumberOfDigits {    

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findNumbers($nums) {
        sort($nums);
        $cnt = 0;
        $base = 10;
        $flag = false;

        foreach ($nums as $n) {
            while ($n >= $base) {
                $base *= 10;
                $flag = !$flag;
            }
            if ($flag) {
                $cnt++;
            }
        }
        return $cnt;
    }

}
