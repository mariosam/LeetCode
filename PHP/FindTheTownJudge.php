<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class FindTheTownJudge {    

    /**
     * @param Integer $n
     * @param Integer[][] $trust
     * @return Integer
     */
    function findJudge($n, $trust) {
        $arr = array_fill(0, $n+1, 0);
        $rv = -1;

        foreach ($trust as $item) {
            $arr[$item[1]]++;
        }

        for ($j = 1; $j < count($arr); $j++) {
            if ($arr[$j] == $n-1) {
                $rv = $j;
                break;
            }
        }

        foreach ($trust as $item) {
            if ($item[0] == $rv) {
                return -1;
            }
        }

        return $rv;
    }
}
