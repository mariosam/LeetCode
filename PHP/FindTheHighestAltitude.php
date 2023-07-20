<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class FindTheHighestAltitude {    

    /**
     * @param Integer[] $gain
     * @return Integer
     */
    function largestAltitude($gain) {
        $res = 0;
        $cur = 0;

        foreach ($gain as $g) {
            $cur += $g;
            if ($cur > $res) {
                $res = $cur;
            }
        }

        return $res;
    }

}
