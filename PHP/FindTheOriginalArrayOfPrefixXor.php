<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class FindTheOriginalArrayOfPrefixXor {    

    /**
     * @param Integer[] $pref
     * @return Integer[]
     */
    function findArray($pref) {
        $ans = array();
        $ans[0] = $pref[0];
    
        for ($i = 1; $i < count($pref); ++$i) {
            $ans[$i] = $pref[$i] ^ $pref[$i - 1];
        }
    
        return $ans;
    }

}
