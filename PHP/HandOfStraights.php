<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class HandOfStraights {    

    /**
     * @param Integer[] $hand
     * @param Integer $groupSize
     * @return Boolean
     */
    function isNStraightHand($hand, $groupSize) {
        $cnt = [];
        foreach ($hand as $v) {
            if (!isset($cnt[$v])) {
                $cnt[$v] = 0;
            }
            $cnt[$v]++;
        }
        sort($hand);
        foreach ($hand as $v) {
            if (isset($cnt[$v])) {
                for ($x = $v; $x < $v + $groupSize; $x++) {
                    if (!isset($cnt[$x]) || $cnt[$x] == 0) {
                        return false;
                    }
                    $cnt[$x]--;
                    if ($cnt[$x] == 0) {
                        unset($cnt[$x]);
                    }
                }
            }
        }
        return true;
    }

}

