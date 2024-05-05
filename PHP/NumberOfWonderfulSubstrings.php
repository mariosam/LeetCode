<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class NumberOfWonderfulSubstrings {    

    /**
     * @param String $word
     * @return Integer
     */
    function wonderfulSubstrings($word) {
        $ans = 0;
        $mask = 0;
        $freq = array_fill(0, 1024, 0);
        $freq[0] = 1;

        for ($i = 0; $i < strlen($word); $i++) {
            $c = $word[$i];
            $index = ord($c) - ord('a');
            $mask ^= 1 << $index;
            $ans += $freq[$mask];
            
            for ($j = 0; $j < 10; $j++) {
                $ans += $freq[$mask ^ (1 << $j)];
            }
            
            $freq[$mask]++;
        }

        return $ans;
    }

}
