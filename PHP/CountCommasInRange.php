<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CountCommasInRange {    

    /**
     * @param Integer $n
     * @return Integer
     */
    function countCommas($n) {
        return $n >= 1000 ? $n - 999 : 0;
    }
}
