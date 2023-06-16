<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class SortAnArray {    

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortArray($nums) {
        $arr = array_fill(0, 50001, array(0, 0));
        $ans = array();

        foreach ($nums as $num) {
            $n = $num;
            $s = 1;
            if ($n < 0) {
                $n *= -1;
                $s--;
            }
            $arr[$n][$s]++;
        }

        for ($i = 50000; $i >= 0; $i--) {
            for ($j = $arr[$i][0]; $j > 0; $j--) {
                array_push($ans, $i * -1);
            }
        }

        for ($i = 0; $i <= 50000; $i++) {
            for ($j = $arr[$i][1]; $j > 0; $j--) {
                array_push($ans, $i);
            }
        }

        return $ans;
    }
}
