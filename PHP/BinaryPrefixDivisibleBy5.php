<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class BinaryPrefixDivisibleBy5 {    

    /**
     * @param Integer[] $nums
     * @return Boolean[]
     */
    function prefixesDivBy5($nums) {
        $result = [];
        $remainder = 0;

        foreach ($nums as $a) {
            $remainder = (($remainder << 1) + $a) % 5;
            $result[] = ($remainder == 0);
        }

        return $result;
    }
}
