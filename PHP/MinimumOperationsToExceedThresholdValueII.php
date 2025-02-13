<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimumOperationsToExceedThresholdValueII {    

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function minOperations($nums, $k) {
        $pq = new MinHeap();
        foreach ($nums as $num) {
            $pq->insert($num);
        }

        $ops = 0;
        while ($pq->count() > 1 && $pq->top() < $k) {
            $x = $pq->extract();
            $y = $pq->extract();
            $pq->insert($x * 2 + $y);
            $ops++;
        }
        return $ops;
    }
}

class MinHeap extends SplMinHeap {
    protected function compare($a, $b) {
        return $b - $a; // Reverse order for MinHeap behavior
    }
}
