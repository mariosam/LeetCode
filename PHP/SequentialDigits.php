<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class SequentialDigits {    

    /**
     * @param Integer $low
     * @param Integer $high
     * @return Integer[]
     */
    function sequentialDigits($low, $high) {
        $results = [];
        for ($i = 1; $i <= 9; $i++) {
            $num = $i;
            for ($j = $i + 1; $j <= 9; $j++) {
                $num = $num * 10 + $j;
                if ($num >= $low && $num <= $high) {
                    $results[] = $num;
                }
            }
        }
        sort($results);
        return $results;
    }

}
