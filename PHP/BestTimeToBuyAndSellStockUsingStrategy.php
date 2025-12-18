<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class BestTimeToBuyAndSellStockUsingStrategy {    

    /**
     * @param Integer[] $prices
     * @param Integer[] $strategy
     * @param Integer $k
     * @return Integer
     */
    function maxProfit($prices, $strategy, $k) {
        $n = count($prices);
        $s = array_fill(0, $n + 1, 0);
        $t = array_fill(0, $n + 1, 0);

        for ($i = 1; $i <= $n; $i++) {
            $a = $prices[$i - 1];
            $b = $strategy[$i - 1];
            $s[$i] = $s[$i - 1] + $a * $b;
            $t[$i] = $t[$i - 1] + $a;
        }

        $ans = $s[$n];
        for ($i = $k; $i <= $n; $i++) {
            $ans = max(
                $ans,
                $s[$n] - ($s[$i] - $s[$i - $k]) + ($t[$i] - $t[$i - intdiv($k, 2)])
            );
        }

        return $ans;
    }

}
