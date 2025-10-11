<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class TakingMaximumEnergyFromTheMysticDungeon {    

    /**
     * @param Integer[] $energy
     * @param Integer $k
     * @return Integer
     */
    function maximumEnergy($energy, $k) {
        $n = count($energy);
        $f = array_fill(0, $n + 1, 0);

        for ($i = $n - 1; $i >= 0; $i--) {
            $next = min($n, $i + $k);
            $f[$i] = $energy[$i] + $f[$next];
        }

        return max(array_slice($f, 0, $n));
    }

}
