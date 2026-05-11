<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class SeparateTheDigitsInAnArray {    

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function separateDigits($nums) {
        $res = [];

        foreach ($nums as $x) {
            $cur = [];

            while ($x > 0) {
                $cur[] = $x % 10;
                $x = intdiv($x, 10);
            }
            $cur = array_reverse($cur);

            foreach ($cur as $digit) {
                $res[] = $digit;
            }
        }
        return $res;
    }

}
