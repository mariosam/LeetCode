<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class NumberOfSeniorCitizens {    

    /**
     * @param String[] $details
     * @return Integer
     */
    function countSeniors($details) {
        $num = 0;
        foreach ($details as $detail) {
            $age = (int)substr($detail, 11, 2);
            if ($age > 60) {
                $num++;
            }
        }
        return $num;
    }

}
