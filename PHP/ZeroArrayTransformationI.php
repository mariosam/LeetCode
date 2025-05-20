<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class ZeroArrayTransformationI {    

    /**
     * @param Integer[] $nums
     * @param Integer[][] $queries
     * @return Boolean
     */
    function isZeroArray($nums, $queries) {
        $n = count($nums);
        $d = array_fill(0, $n + 1, 0);

        foreach ($queries as [$l, $r]) {
            $d[$l]++;
            if ($r + 1 < count($d)) {
                $d[$r + 1]--;
            }
        }

        $s = 0;
        for ($i = 0; $i < $n; $i++) {
            $s += $d[$i];
            if ($nums[$i] > $s) {
                return false;
            }
        }

        return true;
    }
}
