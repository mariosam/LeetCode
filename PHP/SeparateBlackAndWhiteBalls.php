<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class SeparateBlackAndWhiteBalls {    

    /**
     * @param String $s
     * @return Integer
     */
    function minimumSteps($s) {
        $steps = 0;
        $blackCount = 0;

        for ($i = 0; $i < strlen($s); $i++) {
            if ($s[$i] === '1') {
                $blackCount++;
            } else {
                $steps += $blackCount;
            }
        }

        return $steps;
    }

}
