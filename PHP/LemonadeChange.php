<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class LemonadeChange {    

    /**
     * @param Integer[] $bills
     * @return Boolean
     */
    function lemonadeChange($bills) {
        $five = 0;
        $ten = 0;

        foreach ($bills as $bill) {
            if ($bill == 5) {
                $five++;
            } elseif ($bill == 10) {
                $five--;
                $ten++;
            } elseif ($ten > 0) {
                $ten--;
                $five--;
            } else {
                $five -= 3;
            }

            if ($five < 0) {
                return false;
            }
        }

        return true;
    }

}
