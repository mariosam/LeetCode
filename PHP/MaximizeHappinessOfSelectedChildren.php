<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MaximizeHappinessOfSelectedChildren {    

    /**
     * @param Integer[] $happiness
     * @param Integer $k
     * @return Integer
     */
    function maximumHappinessSum($happiness, $k) {
        sort($happiness);
        $n = count($happiness);
        $ans = 0;

        for ($i = 0; $i < $k; $i++) {
            $x = $happiness[$n - $i - 1] - $i;
            if ($x > 0) {
                $ans += $x;
            }
        }

        return $ans;
    }
}
