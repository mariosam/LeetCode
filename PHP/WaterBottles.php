<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class WaterBottles {    

    /**
     * @param Integer $numBottles
     * @param Integer $numExchange
     * @return Integer
     */
    function numWaterBottles($numBottles, $numExchange) {
        if ($numBottles < $numExchange) {
            return $numBottles;
        }

        $quotient = intdiv($numBottles, $numExchange);
        $reminder = $numBottles % $numExchange;
        $ans = $numBottles + $quotient;

        while ($quotient + $reminder >= $numExchange) {
            $total = $quotient + $reminder;
            $quotient = intdiv($total, $numExchange);
            $reminder = $total % $numExchange;
            $ans += $quotient;
        }

        return $ans;
    }
}
