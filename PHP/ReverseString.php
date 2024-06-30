<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class ReverseString {    

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString($s) {
        $i = 0;
        $j = count($s) - 1;
        while ($i < count($s) / 2) {
            $temp = $s[$i];
            $s[$i] = $s[$j];
            $s[$j] = $temp;
            $i++;
            $j--;
        }
    }

}
