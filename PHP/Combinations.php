<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class Combinations {    

    /**
     * @param Integer $n
     * @param Integer $k
     * @return Integer[][]
     */
    function combine($n, $k) {
        $res = [];
        $values = array_fill(0, $k, 0);
        $i = 0;
        
        while ($i >= 0) {
            $values[$i]++;
            if ($values[$i] > $n) {
                $i--;
            } elseif ($i === $k - 1) {
                $res[] = $values;
            } else {
                $i++;
                $values[$i] = $values[$i - 1];
            }
        }

        return $res;
    }

}
