<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class FindTheLengthOfTheLongestCommonPrefix {    

    /**
     * @param Integer[] $arr1
     * @param Integer[] $arr2
     * @return Integer
     */
    function longestCommonPrefix($arr1, $arr2) {
        $set = [];

        foreach ($arr1 as $x) {
            while ($x > 0) {
                $set[$x] = true;
                $x = intdiv($x, 10);
            }
        }

        $ans = 0;

        foreach ($arr2 as $x) {
            while ($x > 0) {
                if (isset($set[$x])) {
                    $ans = max($ans, strlen(strval($x)));
                    break;
                }
                $x = intdiv($x, 10);
            }
        }

        return $ans;
    }

}
