<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MaximumDistanceInArrays {    

    /**
     * @param Integer[][] $arrays
     * @return Integer
     */
    function maxDistance($arrays) {
        $curMin = min($arrays[0]);
        $curMax = max($arrays[0]);

        $result = 0;
        for ($i = 1; $i < count($arrays); $i++) {
            $newMin = min($arrays[$i]);
            $newMax = max($arrays[$i]);

            $result = max($result, abs($newMax - $curMin));
            $result = max($result, abs($curMax - $newMin));

            $curMin = min($curMin, $newMin);
            $curMax = max($curMax, $newMax);
        }
        return $result;
    }
}
