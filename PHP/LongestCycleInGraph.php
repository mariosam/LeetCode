<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class LongestCycleInGraph {    

    /**
     * @param Integer[] $edges
     * @return Integer
     */
    function longestCycle($edges) {
        $n = count($edges); 
		$ret = -1;
        $visited = array_fill(0, $n, false);
        
		for ( $i=0; $i < $n; $i++ ) {
            if ( $visited[$i] ) continue;
            $p1 = $i; 
			$p2 = $edges[$p1];

            while ( $p1 != -1 && !$visited[$p1] ) {
                $visited[$p1] = true;

                if ( $p2 != -1 ) $p2 = $edges[$p2];
                if ( $p2 != -1 ) $p2 = $edges[$p2];
                if ( $p2 == $p1 ) {
                    $p = $p1; $len1 = 1;

                    while ( $edges[$p] != $p1 ) {
                        $p = $edges[$p];
                        $len1++;
                    }
                    $ret = max($ret, $len1);
                    break;
                }
                $p1 = $edges[$p1];
            }
        }
        return $ret;
    }

}
