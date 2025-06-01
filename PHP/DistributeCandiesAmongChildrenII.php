<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class DistributeCandiesAmongChildrenII {    

    /**
     * @param Integer $n
     * @param Integer $limit
     * @return Integer
     */
    function distributeCandies($n, $limit) {
        if ($n > 3 * $limit) {
            return 0;
        }

        $ans = $this->comb2($n + 2);
        if ($n > $limit) {
            $ans -= 3 * $this->comb2($n - $limit + 1);
        }
        if ($n - 2 >= 2 * $limit) {
            $ans += 3 * $this->comb2($n - 2 * $limit);
        }

        return $ans;
    }

    function comb2(int $n): int {
        return intdiv($n * ($n - 1), 2);
    }

}
