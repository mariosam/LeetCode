<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimumCostOfBuyingCandiesWithDiscount {    

    /**
     * @param Integer[] $cost
     * @return Integer
     */
    function minimumCost($cost) {
        sort($cost);
        $ans = 0;

        for ($i = count($cost) - 1; $i >= 0; $i--) {
            $ans += $cost[$i];
            $i--;

            if ($i >= 0) {
                $ans += $cost[$i];
            }
            $i--;
        }
        return $ans;
    }
}
