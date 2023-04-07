<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class SuccessfulPairsOfSpellsAndPotions {    

    /**
     * @param Integer[] $spells
     * @param Integer[] $potions
     * @param Integer $success
     * @return Integer[]
     */
    function successfulPairs($spells, $potions, $success) {
        $n = count($spells);
        $m = count($potions);
        sort($potions);
        $pairs = [$n];

        for ($i=0; $i < $n; $i++) {
            $left = 0; $right = $m - 1;

            while ($left < $right) {
                $mid = intval(($right - $left) / 2) + $left;
                
                if ($potions[$mid] * $spells[$i] >= $success) {
                    $right = $mid;
                } else {
                    $left = $mid + 1;
                }
            }

            if ($potions[$left] * $spells[$i] < $success) {
                $left++;
            }
            $pairs[$i] = $m - $left;
        }

        return $pairs;
    }

}
