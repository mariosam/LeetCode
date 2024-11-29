<?php
/**
 * @version PHP 8.2.20
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class FindChampionII {    

    /**
     * @param Integer $n
     * @param Integer[][] $edges
     * @return Integer
     */
    function findChampion($n, $edges) {
        $greater = range(0, $n - 1);
        foreach ($edges as $edge) {
            $greater[$edge[1]] = $edge[0];
        }
        $valid = -1;
        for ($i = 0; $i < $n; $i++) {
            if ($greater[$i] === $i) {
                if ($valid === -1) {
                    $valid = $i;
                } else {
                    return -1;
                }
            }
        }
        return $valid;
    }

}
