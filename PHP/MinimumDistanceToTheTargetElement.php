<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimumDistanceToTheTargetElement {    

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @param Integer $start
     * @return Integer
     */
    function getMinDistance($nums, $target, $start) {
        $n = count($nums);

        for ($i = 0; $start + $i < $n || $start - $i >= 0; $i++) {
            if ($start + $i < $n) {
                if ($nums[$start + $i] == $target) {
                    return $i;
                }
            }
            if ($start - $i >= 0) {
                if ($nums[$start - $i] == $target) {
                    return $i;
                }
            }
        }

        return -1;
    }
}
