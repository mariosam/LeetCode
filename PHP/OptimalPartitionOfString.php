<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class OptimalPartitionOfString {    

    /**
     * @param String $s
     * @return Integer
     */
    function partitionString($s) {
        if (strlen($s) <= 0) return 0;
        $hashSet = [];
        $result = 0;

        for ($i=0; $i < strlen($s); $i++) {
            $character = $s[$i];
            if (in_array($character, $hashSet)) {
                $result += 1;
                unset($hashSet);
            }
            $hashSet[$i] = $character;
        }
        if (!empty($hashSet)) $result += 1;
				
        return $result;
    }

}
