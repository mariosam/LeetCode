<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class HeightChecker {    

    /**
     * @param Integer[] $heights
     * @return Integer
     */
    function heightChecker($heights) {
        $expected = $heights;
        sort($expected);
        $ans = 0;
        foreach ($heights as $i => $v) {
            if ($v != $expected[$i]) {
                $ans++;
            }
        }
        return $ans;
    }

}

