<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class BoatsToSavePeople {    

    /**
     * @param Integer[] $people
     * @param Integer $limit
     * @return Integer
     */
    function numRescueBoats($people, $limit) {
        sort($people);
        $n = count($people);
        $l = 0; $r = $n - 1;
        $ans = 0;

        while ($l < $r) {
            $sum = $people[$l] + $people[$r];
            $ans++;
            if ($sum <= $limit) {
                $l++;
                $r--;
            } else {
                $r--;
            }
        }
        if ($l == $r) $ans++;
        
		return $ans;
    }

}
