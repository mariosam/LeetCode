<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class KthSmallestInLexicographicalOrder {    

    /**
     * @param Integer $n
     * @param Integer $k
     * @return Integer
     */
    function findKthNumber($n, $k) {
        $curr = 1;
        $k -= 1;

        while ($k > 0) {
            $steps = $this->calSteps($n, $curr, $curr + 1);
            if ($steps <= $k) {
                $curr += 1;
                $k -= $steps;
            } else {
                $curr *= 10;
                $k -= 1;
            }
        }

        return $curr;
    }

    function calSteps($n, $n1, $n2) {
        $steps = 0;

        while ($n1 <= $n) {
            $steps += min($n + 1, $n2) - $n1;
            $n1 *= 10;
            $n2 *= 10;
        }

        return $steps;
    }

}
