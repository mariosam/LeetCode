<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class FindTargetIndicesAfterSortingArray {    

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function targetIndices($nums, $target) {
        sort($nums);
        $ans = [];

        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] == $target) {
                $ans[] = $i;
            }
        }
        return $ans;
    }

}
