<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class FairDistributionOfCookies {    

    /**
     * @param Integer[] $cookies
     * @param Integer $k
     * @return Integer
     */
    function distributeCookies($cookies, $k) {
        rsort($cookies);
        $cnt = array_fill(0, $k, 0);
        $ans = 1 << 30;
        $this->dfs(0, $cookies, $cnt, $ans, $k);

        return $ans;
    }

    function dfs($i, $cookies, &$cnt, &$ans, $k) {
        if ($i >= count($cookies)) {
            $ans = 0;
            foreach ($cnt as $v) {
                $ans = max($ans, $v);
            }
            return;
        }
        
        for ($j = 0; $j < $k; $j++) {
            if ($cnt[$j] + $cookies[$i] >= $ans || ($j > 0 && $cnt[$j] == $cnt[$j - 1])) {
                continue;
            }
            $cnt[$j] += $cookies[$i];
            $this->dfs($i + 1, $cookies, $cnt, $ans, $k);
            $cnt[$j] -= $cookies[$i];
        }
    }

}
