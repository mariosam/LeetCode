<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimumTimeToMakeRopeColorful {    

    /**
     * @param String $colors
     * @param Integer[] $neededTime
     * @return Integer
     */
    function minCost($colors, $neededTime) {
        $ans = 0;
        $maxNeededTime = $neededTime[0];
        $n = strlen($colors);

        for ($i = 1; $i < $n; ++$i) {
            if ($colors[$i] === $colors[$i - 1]) {
                $ans += min($maxNeededTime, $neededTime[$i]);
                $maxNeededTime = max($maxNeededTime, $neededTime[$i]);
            } else {
                $maxNeededTime = $neededTime[$i];
            }
        }

        return $ans;
    }
}
