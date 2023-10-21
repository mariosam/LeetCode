<?php
/**
 * @version PHP 8.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class SoupServings {    

    /**
     * @param Integer $n
     * @return Float
     */
    function soupServings($n) {
        if ($n > 4800) {
            return 1;
        }
        
        $servings = $n % 25 == 0 ? $n / 25 : intdiv($n, 25) + 1;
        return $this->helper($servings, $servings, array_fill(0, $servings + 1, array_fill(0, $servings + 1, -1)));
    }

    function helper($a, $b, $memo) {
        if ($a <= 0 && $b <= 0) {
            return 0.5;
        }
        
        if ($a <= 0) {
            return 1;
        }
        
        if ($b <= 0) {
            return 0;
        }
        
        if ($memo[$a][$b] > 0) {
            return $memo[$a][$b];
        }
        
        $p = 0;
        for ($i = 1; $i <= 4; $i++) {
            $p += 0.25 * $this->helper($a - $i, $b - (4 - $i), $memo);
        }
        
        $memo[$a][$b] = $p;
        return $p;
    }

}
