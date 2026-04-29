<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MaximumScoreFromGridOperations {    

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function maximumScore($grid) {
        $n = count($grid);
        // prefix[j][i]
        $prefix = array_fill(0, $n, array_fill(0, $n + 1, 0));

        for ($j = 0; $j < $n; $j++) {
            for ($i = 0; $i < $n; $i++) {
                $prefix[$j][$i + 1] = $prefix[$j][$i] + $grid[$i][$j];
            }
        }

        $prevPick = array_fill(0, $n + 1, 0);
        $prevSkip = array_fill(0, $n + 1, 0);

        for ($j = 1; $j < $n; $j++) {
            $currPick = array_fill(0, $n + 1, 0);
            $currSkip = array_fill(0, $n + 1, 0);

            for ($curr = 0; $curr <= $n; $curr++) {
                for ($prev = 0; $prev <= $n; $prev++) {
                    if ($curr > $prev) {
                        $score = $prefix[$j - 1][$curr] - $prefix[$j - 1][$prev];
                        $currPick[$curr] = max($currPick[$curr], $prevSkip[$prev] + $score);
                        $currSkip[$curr] = max($currSkip[$curr], $prevSkip[$prev] + $score);
                    } else {
                        $score = $prefix[$j][$prev] - $prefix[$j][$curr];
                        $currPick[$curr] = max($currPick[$curr], $prevPick[$prev] + $score);
                        $currSkip[$curr] = max($currSkip[$curr], $prevPick[$prev]);
                    }
                }
            }

            $prevPick = $currPick;
            $prevSkip = $currSkip;
        }

        return max($prevPick);
    }
}
