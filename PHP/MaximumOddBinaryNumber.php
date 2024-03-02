<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MaximumOddBinaryNumber {    

    /**
     * @param String $s
     * @return String
     */
    function maximumOddBinaryNumber($s) {
        $cnt = substr_count($s, '1');
        return str_repeat('1', max(0, $cnt - 1)) . str_repeat('0', max(0, strlen($s) - $cnt)) . '1';
    }
}
