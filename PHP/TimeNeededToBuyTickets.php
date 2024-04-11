<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class TimeNeededToBuyTickets {    

    /**
     * @param Integer[] $tickets
     * @param Integer $k
     * @return Integer
     */
    function timeRequiredToBuy($tickets, $k) {
        $ans = 0;
        for ($i = 0; $i < count($tickets); $i++) {
            if ($i <= $k) {
                $ans += min($tickets[$k], $tickets[$i]);
            } else {
                $ans += min($tickets[$k] - 1, $tickets[$i]);
            }
        }
        return $ans;
    }

}
