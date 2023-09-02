<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MaximumRunningTimeOfComputers {    

    /**
     * @param Integer $n
     * @param Integer[] $batteries
     * @return Integer
     */
    function maxRunTime($n, $batteries) {
        rsort($batteries);
        $sum = array_sum($batteries);

        foreach ($batteries as $battery) {
            if ($battery <= $sum / $n) {
                return (int) ($sum / $n);
            }
            $sum -= $battery;
            $n--;
        }

        return 0;
    }
}
