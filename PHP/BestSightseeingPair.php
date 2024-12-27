<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class BestSightseeingPair {    

    /**
     * @param Integer[] $values
     * @return Integer
     */
    function maxScoreSightseeingPair($values) {
        $ans = 0;
        $mx = $values[0];
        for ($i = 1; $i < count($values); $i++) {
            $ans = max($ans, $values[$i] - $i + $mx);
            $mx = max($mx, $values[$i] + $i);
        }
        return $ans;
    }

}
