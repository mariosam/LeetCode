<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class LargestNumber {    

    /**
     * @param Integer[] $nums
     * @return String
     */
    function largestNumber($nums) {
        $list = array_map('strval', $nums);

        usort($list, function ($a, $b) {
            $s1 = $a . $b;
            $s2 = $b . $a;
            return strcmp($s2, $s1);
        });

        if ($list[0] === "0") {
            return "0";
        }

        return implode('', $list);
    }

}
