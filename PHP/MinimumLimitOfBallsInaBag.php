<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimumLimitOfBallsInaBag {    

    /**
     * @param Integer[] $nums
     * @param Integer $maxOperations
     * @return Integer
     */
    function minimumSize($nums, $maxOperations) {
        $r = max($nums);
        return 1 + $this->search($r, $nums, $maxOperations);
    }

    function search(int $r, array $nums, int $maxOperations): int {
        $low = 1;
        $high = $r;

        while ($low <= $high) {
            $mid = intval(($low + $high) / 2);
            $cnt = 0;

            foreach ($nums as $x) {
                $cnt += intval(($x - 1) / $mid);
            }

            if ($cnt <= $maxOperations) {
                $high = $mid - 1;
            } else {
                $low = $mid + 1;
            }
        }

        return $low - 1;
    }
}
