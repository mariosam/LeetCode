<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class AppleRedistributionIntoBoxes {    

    /**
     * @param Integer[] $apple
     * @param Integer[] $capacity
     * @return Integer
     */
    function minimumBoxes($apple, $capacity) {
        $numberOfApples = array_sum($apple);

        sort($capacity);
        $m = count($capacity);

        $boxCapacity = 0;
        $numberOfBoxes = 0;

        for ($i = $m - 1; $i >= 0; $i--) {
            $boxCapacity += $capacity[$i];
            $numberOfBoxes++;

            if ($boxCapacity >= $numberOfApples) {
                break;
            }
        }

        return $numberOfBoxes;
    }
}
