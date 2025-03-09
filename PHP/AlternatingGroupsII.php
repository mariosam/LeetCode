<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class AlternatingGroupsII {    

    /**
     * @param Integer[] $colors
     * @param Integer $k
     * @return Integer
     */
    function numberOfAlternatingGroups($colors, $k) {
        $n = count($colors);
        $res = 0;
        $cnt = 1;

        for ($i = -$k + 2; $i < $n; $i++) {
            $idx1 = ($i + $n) % $n;
            $idx2 = ($i - 1 + $n) % $n;

            if ($colors[$idx1] != $colors[$idx2]) {
                $cnt++;
            } else {
                $cnt = 1;
            }

            if ($cnt >= $k) {
                $res++;
            }
        }
        return $res;
    }

}
