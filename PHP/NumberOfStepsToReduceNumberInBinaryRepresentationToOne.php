<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class NumberOfStepsToReduceNumberInBinaryRepresentationToOne {    

    /**
     * @param String $s
     * @return Integer
     */
    function numSteps($s) {
        $carry = 0;
        $res = 0;
        $n = strlen($s);

        for ($i = $n - 1; $i > 0; $i--) {
            $res += 1;
            if ((int)($s[$i] - '0') + $carry == 1) {
                $carry = 1;
                $res += 1;
            }
        }

        return $res + $carry;
    }

}
