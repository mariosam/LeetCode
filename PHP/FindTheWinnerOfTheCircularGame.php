<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class FindTheWinnerOfTheCircularGame {    

    /**
     * @param Integer $n
     * @param Integer $k
     * @return Integer
     */
    function findTheWinner($n, $k) {
        if ($n == 1) {
            return 1;
        }
        $ans = ($this->findTheWinner($n - 1, $k) + $k) % $n;
        if ($ans == 0) {
            return $n;
        }
        return $ans;
    }
}
