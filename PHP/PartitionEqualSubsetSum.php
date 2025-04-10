<?php
/**
 * @version PHP 8.2.20
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class PartitionEqualSubsetSum {    

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function canPartition($nums) {
        $l = count($nums);
        if ($l <= 1) {
            return false;
        }

        $sum = array_sum($nums);
        if ($sum % 2 != 0) {
            return false;
        }

        $sum = $sum >> 1;
        $dp = array_fill(0, $sum + 1, 0);

        foreach ($nums as $num) {
            for ($j = $sum; $j >= $num; $j--) {
                $dp[$j] = max($dp[$j], $dp[$j - $num] + $num);
            }
            if ($dp[$sum] == $sum) {
                return true;
            }
        }

        return false;
    }

}
