<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class UniqueNumberOfOccurrences {    

    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function uniqueOccurrences($arr) {
        $resMap = [];
        foreach ($arr as $item) {
            if (array_key_exists($item, $resMap)) {
                $resMap[$item]++;
                continue;
            }
            $resMap[$item] = 1;
        }

        $resNewMap = [];
        foreach ($resMap as $item) {
            if (array_key_exists($item, $resNewMap)) {
                return false;
            }
            $resNewMap[$item] = 1;
        }

        return true;
    }
}
