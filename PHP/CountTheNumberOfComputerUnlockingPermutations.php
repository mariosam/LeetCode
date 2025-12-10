<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CountTheNumberOfComputerUnlockingPermutations {    

    /**
     * @param Integer[] $complexity
     * @return Integer
     */
    function countPermutations($complexity) {
        $mod = 1000000007;
        $n = count($complexity);

        $ans = 1;
        for ($i = 1; $i < $n; $i++) {
            if ($complexity[$i] <= $complexity[0]) {
                return 0;
            }
            $ans = ($ans * $i) % $mod;
        }

        return (int)$ans;
    }

}
