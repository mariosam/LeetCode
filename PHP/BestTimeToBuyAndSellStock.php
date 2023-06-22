<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class BestTimeToBuyAndSellStock {    

    /**
     * @param Integer[] $prices
     * @param Integer $fee
     * @return Integer
     */
    function maxProfit($prices, $fee) {
        if (count($prices) <= 1) return 0;

        $min = $prices[0];
        $profit = 0;
        for ($i = 1; $i < count($prices); $i ++) {
            if ($prices[$i] < $min) {
                $min = $prices[$i];
            }

            if ($prices[$i] - $min > $fee) {
                $profit += ($prices[$i] - $min - $fee);
                $min = $prices[$i] - $fee;
            }
        }

        return $profit;
    }

}
