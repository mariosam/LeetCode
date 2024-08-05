<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class KthDistinctStringInAnArray {    

    /**
     * @param String[] $arr
     * @param Integer $k
     * @return String
     */
    function kthDistinct($arr, $k) {
        $map = array();
        foreach ($arr as $s) {
            if (!isset($map[$s])) {
                $map[$s] = 0;
            }
            $map[$s]++;
        }
        foreach ($arr as $s) {
            if ($map[$s] == 1) {
                if (--$k == 0) {
                    return $s;
                }
            }
        }
        return "";
    }

}
