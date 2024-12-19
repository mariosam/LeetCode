<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MaxChunksToMakeSorted {    

    /**
     * @param Integer[] $arr
     * @return Integer
     */
    function maxChunksToSorted($arr) {
        $ans = 0;
        $mx = 0;

        foreach ($arr as $i => $v) {
            $mx = max($mx, $v);
            if ($i === $mx) {
                $ans++;
            }
        }

        return $ans;
    }
}
