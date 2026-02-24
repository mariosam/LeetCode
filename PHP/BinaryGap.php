<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class BinaryGap {    

    /**
     * @param Integer $n
     * @return Integer
     */
    function binaryGap($n) {
        $maxlen = 0;
        $len = 0;
        $foundOne = false;

        while ($n > 0) {
            $val = $n & 1;
            $n >>= 1;

            if ($val == 1) {
                if ($foundOne) {
                    $maxlen = max($maxlen, $len);
                }
                $len = 1;
                $foundOne = true;
            } elseif ($foundOne) {
                $len++;
            }
        }

        return $maxlen;
    }

}
