<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class ProfitableSchemes {    

    /**
     * @param Integer $n
     * @param Integer $minProfit
     * @param Integer[] $group
     * @param Integer[] $profit
     * @return Integer
     */
    function profitableSchemes($n, $minProfit, $group, $profit) {
        $modulo = 1000000007;
        $dp = array();
        
        for ($i = 0; $i <= $n; ++$i) {
            for ($j = 0; $j <= $minProfit; ++$j) {
                $dp[$i][$j] = 0;
            }
            $dp[$i][0] = 1;
        }
        
        for ($k = 0; $k < count($group); ++$k) {
            $members = $group[$k];
            $earnings = $profit[$k];
            
            for ($i = $n; $i >= $members; --$i) {
                for ($j = $minProfit; $j >= 0; --$j) {
                    $dp[$i][$j] = ($dp[$i][$j] + $dp[$i - $members][max(0, $j - $earnings)]) % $modulo;
                }
            }
        }
        
        return $dp[$n][$minProfit];
    }

}
