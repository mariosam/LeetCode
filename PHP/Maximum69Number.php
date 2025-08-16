<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class Maximum69Number {    

    /**
     * @param Integer $num
     * @return Integer
     */
    function maximum69Number ($num) {
        $numCopy = $num;
        $indexSix = -1;
        $currDigit = 0;

        while ($numCopy > 0) {
            if ($numCopy % 10 == 6) {
                $indexSix = $currDigit;
            }
            $numCopy = intdiv($numCopy, 10);
            $currDigit++;
        }

        return $indexSix == -1 ? $num : $num + 3 * pow(10, $indexSix);
    }
}
