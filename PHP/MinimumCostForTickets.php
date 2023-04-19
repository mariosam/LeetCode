<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimumCostForTickets {    

    /**
     * @param Integer[] $days
     * @param Integer[] $costs
     * @return Integer
     */
    function mincostTickets($days, $costs) {
        if ( count($days) == 0 ) return 0;

        $dp = [0];
        $len = $days[count($days)-1];
        $idx = 0;
        $duration = [1,7,30];

        for ( $i=1; $i<=$len; $i++ ) {
            if ( $i == $days[$idx] ) {
                $dp[$i] = INF;
                for ( $j=0; $j<count($costs); $j++ ) {
                    if ( $i > $duration[$j] ) {
                        $dp[$i] = min($dp[$i], $dp[$i-$duration[$j]] + $costs[$j]);
                    } else {
                        $dp[$i] = min($dp[$i], $dp[0] + $costs[$j]);
                    }
                }
                $idx++;
            } else {
                $dp[$i] = $dp[$i-1];
            }
        }

        return $dp[$len];
    }
}
