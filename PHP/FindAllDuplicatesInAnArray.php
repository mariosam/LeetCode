<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class FindAllDuplicatesInAnArray {    

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function findDuplicates($nums) {
        $ans = [];
        for ($i = 0; $i < count($nums); $i++) {
            while ($nums[$i] !== $nums[$nums[$i] - 1]) {
                $temp = $nums[$i];
                $nums[$i] = $nums[$temp - 1];
                $nums[$temp - 1] = $temp;
            }
        }
        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] !== $i + 1) {
                $ans[] = $nums[$i];
            }
        }
        return $ans;
    }

}
