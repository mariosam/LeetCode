<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

use SplPriorityQueue;

class MinimumCostPathWithEdgeReversals {    

    /**
     * @param Integer $n
     * @param Integer[][] $edges
     * @return Integer
     */
    function minCost($n, $edges) {
        $g = array_fill(0, $n, []);
        foreach ($edges as $e) {
            [$u, $v, $w] = $e;
            $g[$u][] = [$v, $w];
            $g[$v][] = [$u, $w * 2];
        }

        $INF = PHP_INT_MAX >> 1;
        $dist = array_fill(0, $n, $INF);
        $dist[0] = 0;

        $pq = new \SplPriorityQueue();
        $pq->setExtractFlags(SplPriorityQueue::EXTR_BOTH);
        $pq->insert(0, 0); // value=node, priority=-dist

        while (!$pq->isEmpty()) {
            $item = $pq->extract();
            $u = $item['data'];
            $d = -$item['priority'];

            if ($d > $dist[$u]) continue;
            if ($u === $n - 1) return $d;

            foreach ($g[$u] as [$v, $w]) {
                $nd = $d + $w;
                if ($nd < $dist[$v]) {
                    $dist[$v] = $nd;
                    $pq->insert($v, -$nd);
                }
            }
        }
        return -1;
    }
}
