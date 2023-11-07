<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class FindTheDuplicateNumber {    

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findDuplicate($nums) {
        $left = 1;
        $right = count($nums) - 1;

        while ($left < $right) {
            $mid = $left + (($right - $left) >> 1);

            $count = 0;
            foreach ($nums as $num) {
                if ($num <= $mid) {
                    $count++;
                }
            }

            if ($count > $mid) {
                $right = $mid;
            } else {
                $left = $mid + 1;
            }
        }

        return $left;
    }

}
