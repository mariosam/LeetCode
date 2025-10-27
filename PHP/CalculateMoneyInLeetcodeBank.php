<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CalculateMoneyInLeetcodeBank {    

    /**
     * @param Integer $n
     * @return Integer
     */
    function totalMoney($n) {
        $num = 0;
        $ans = 0;
        $index = 0;

        for ($i = 0; $i < $n; $i++) {
            if ($i % 7 == 0) {
                $num++;
                $index = 0;
            }
            $ans += $num + $index * 1;
            $index++;
        }

        return $ans;
    }

}
