<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CountOfInterestingSubarrays {    

    /**
     * @param Integer[] $nums
     * @param Integer $modulo
     * @param Integer $k
     * @return Integer
     */
    function countInterestingSubarrays($nums, $modulo, $k) {
        $ans = 0;
        $prefix = 0;
        $prefixCount = [0 => 1];

        foreach ($nums as $num) {
            if ($num % $modulo === $k) {
                $prefix = ($prefix + 1) % $modulo;
            }
            $key = ($prefix - $k + $modulo) % $modulo;
            $ans += $prefixCount[$key] ?? 0;
            $prefixCount[$prefix] = ($prefixCount[$prefix] ?? 0) + 1;
        }

        return $ans;
    }
}
