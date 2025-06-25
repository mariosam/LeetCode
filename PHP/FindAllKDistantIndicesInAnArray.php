<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class FindAllKDistantIndicesInAnArray {    

    /**
     * @param Integer[] $nums
     * @param Integer $key
     * @param Integer $k
     * @return Integer[]
     */
    function findKDistantIndices($nums, $key, $k) {
        $ans = [];
        $keyIndices = [];

        foreach ($nums as $i => $num) {
            if ($num === $key) {
                $keyIndices[] = $i;
            }
        }

        foreach ($nums as $i => $num) {
            foreach ($keyIndices as $j) {
                if (abs($i - $j) <= $k) {
                    $ans[] = $i;
                    break;
                }
            }
        }

        sort($ans);
        return $ans;
    }

}
