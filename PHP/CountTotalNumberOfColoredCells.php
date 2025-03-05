<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CountTotalNumberOfColoredCells {    

    /**
     * @param Integer $n
     * @return Integer
     */
    function coloredCells($n) {
        return $n * $n + ($n - 1) * ($n - 1);
    }

}
