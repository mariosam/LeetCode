<?php
/**
 * @version PHP 8.2.20
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class FindLuckyIntegerInAnArray {    

    /**
     * @param Integer[] $arr
     * @return Integer
     */
    function findLucky($arr) {
        $cnt = array_fill(0, 501, 0);
        foreach ($arr as $x) {
            $cnt[$x]++;
        }
        for ($x = 500; $x > 0; $x--) {
            if ($cnt[$x] === $x) {
                return $x;
            }
        }
        return -1;
    }

}
