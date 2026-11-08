<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class FindTheDistanceValueBetweenTwoArrays {    

    /**
     * @param Integer[] $arr1
     * @param Integer[] $arr2
     * @param Integer $d
     * @return Integer
     */
    function findTheDistanceValue($arr1, $arr2, $d) {
        $res = 0;

        foreach ($arr1 as $num1) {
            $valid = true;

            foreach ($arr2 as $num2) {
                if (abs($num1 - $num2) <= $d) {
                    $valid = false;
                    break;
                }
            }

            if ($valid) {
                $res++;
            }
        }
        return $res;
    }

}
