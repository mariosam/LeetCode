<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class SmallestUniqueSubarray {    

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function smallestUniqueSubarray($nums) {
        $n = count($nums);

        $check = function($l) use ($nums, $n) {
            $counts = [];
            $unique = 0;

            $add = function($h) use (&$counts, &$unique) {
                $counts[$h] = ($counts[$h] ?? 0) + 1;

                if ($counts[$h] === 1) {
                    $unique++;
                } elseif ($counts[$h] === 2) {
                    $unique--;
                }
            };
            $base = 131;
            $mod = 2147483647;
            $h = 0;
            $pow = 1;

            for ($i = 0; $i < $l; $i++) {
                $pow = ($pow * $base) % $mod;
                $h = ($h * $base + $nums[$i]) % $mod;
            }
            $add($h);

            for ($i = $l; $i < $n; $i++) {
                $h = ($h * $base - $nums[$i - $l] * $pow % $mod + $mod + $nums[$i]) % $mod;
                $add($h);
            }
            return $unique > 0;
        };
        $low = 1;
        $high = $n;

        while ($low < $high) {
            $mid = intdiv($low + $high, 2);

            if ($check($mid)) {
                $high = $mid;
            } else {
                $low = $mid + 1;
            }
        }
        return $low;
    }

}
