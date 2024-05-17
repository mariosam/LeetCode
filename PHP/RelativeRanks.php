<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class RelativeRanks {    

    /**
     * @param Integer[] $score
     * @return String[]
     */
    function findRelativeRanks($score) {
        $result = array_fill(0, count($score), "");
        $max = max($score);
        $hash = array_fill(0, $max + 1, 0);

        foreach ($score as $i => $s) {
            $hash[$s] = $i + 1;
        }

        $place = 1;
        for ($i = $max; $i >= 0; $i--) {
            if ($hash[$i] != 0) {
                if ($place == 1) {
                    $result[$hash[$i] - 1] = "Gold Medal";
                } elseif ($place == 2) {
                    $result[$hash[$i] - 1] = "Silver Medal";
                } elseif ($place == 3) {
                    $result[$hash[$i] - 1] = "Bronze Medal";
                } else {
                    $result[$hash[$i] - 1] = (string)$place;
                }
                $place++;
            }
        }
        return $result;
    }

}
