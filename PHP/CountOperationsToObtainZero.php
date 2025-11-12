<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CountOperationsToObtainZero {    

    /**
     * @param Integer $num1
     * @param Integer $num2
     * @return Integer
     */
    function countOperations($num1, $num2) {
        if ($num1 == 0 || $num2 == 0) {
            return 0;
        } elseif ($num1 == $num2) {
            return 1;
        }

        $count = 0;
        while ($num1 != 0 && $num2 != 0) {
            $count++;
            if ($num1 == $num2) {
                break;
            } elseif ($num1 > $num2) {
                $num1 -= $num2;
            } else {
                $num2 -= $num1;
            }
        }

        return $count;
    }
}
