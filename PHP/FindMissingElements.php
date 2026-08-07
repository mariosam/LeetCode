<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class FindMissingElements {    

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function findMissingElements($nums) {
        $list = [];
        $ans = [];
        $min = min($nums);
        $max = max($nums);

        for ($i = $min; $i < $max; $i++) {
            $list[] = $i;
        }

        foreach ($list as $e) {
            $found = false;
            foreach ($nums as $num) {
                if ($e == $num) {
                    $found = true;
                    break;
                }
            }

            if (!$found) {
                $ans[] = $e;
            }
        }
        return $ans;
    }

}
