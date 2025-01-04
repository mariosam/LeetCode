<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class NumberOfWaysToSplitArray {    

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function waysToSplitArray($nums) {
        $n = count($nums);
        $sum = 0;
        foreach ($nums as $num) {
            $sum += $num;
        }

        $presum = 0;
        $res = 0;
        for ($i = 0; $i < $n; $i++) {
            $presum += $nums[$i];
            if ($i < $n - 1 && $presum >= $sum - $presum) {
                $res++;
            }
        }
        return $res;

    }

}
