<?php
/**
 * @version PHP 8.2.20
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class FindEventualSafeStates {    

    /**
     * @param Integer[][] $graph
     * @return Integer[]
     */
    function eventualSafeNodes($graph) {
        $n = count($graph);
        $color = array_fill(0, $n, 0);
        $result = [];

        for ($i = 0; $i < $n; $i++) {
            if ($this->dfs($i, $graph, $color)) {
                $result[] = $i;
            }
        }

        return $result;
    }

    function dfs($node, &$graph, &$color) {
        if ($color[$node] > 0) return $color[$node] == 2;
        $color[$node] = 1;
        foreach ($graph[$node] as $neighbor) {
            if (!$this->dfs($neighbor, $graph, $color)) {
                return false;
            }
        }
        $color[$node] = 2;
        return true;
    }

}
