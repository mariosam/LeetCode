<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class FindMissingObservations {    

    /**
     * @param Integer[] $rolls
     * @param Integer $mean
     * @param Integer $n
     * @return Integer[]
     */
    function missingRolls($rolls, $mean, $n) {
        $totalSum = $mean * (count($rolls) + $n);
        $currentSum = array_sum($rolls);
        $sum = $totalSum - $currentSum;

        if ($sum < $n || $sum > 6 * $n) {
            return []; // Return an empty array if the required sum is out of bounds
        }

        $result = [];
        $x = intdiv($sum, $n);
        $y = $sum % $n;

        for ($i = 0; $i < $n; $i++) {
            if ($i < $y) {
                $result[] = $x + 1;
            } else {
                $result[] = $x;
            }
        }

        return $result;
    }

}
