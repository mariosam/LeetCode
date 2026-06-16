<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class ProcessStringWithSpecialOperationsI {    

    /**
     * @param String $s
     * @return String
     */
    function processStr($s) {
        $ret = '';

        for ($i = 0; $i < strlen($s); $i++) {
            $c = $s[$i];
            if ($c === '*') {
                if (strlen($ret) > 0) {
                    $ret = substr($ret, 0, -1);
                }
            } elseif ($c === '#') {
                if (strlen($ret) > 0) {
                    $ret .= $ret;
                }
            } elseif ($c === '%') {
                $ret = strrev($ret);
            } else {
                $ret .= $c;
            }
        }
        return $ret;
    }

}
