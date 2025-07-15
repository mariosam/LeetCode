<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MaximumMatchingOfPlayersWithTrainers {    

   /**
     * @param Integer[] $players
     * @param Integer[] $trainers
     * @return Integer
     */
    function matchPlayersAndTrainers($players, $trainers) {
        sort($players);
        sort($trainers);

        $i = 0;
        $j = 0;
        $res = 0;
        $m = count($players);
        $n = count($trainers);

        while ($i < $m && $j < $n) {
            if ($players[$i] <= $trainers[$j]) {
                $res++;
                $i++;
                $j++;
            } else {
                $j++;
            }
        }

        return $res;
    }
}
