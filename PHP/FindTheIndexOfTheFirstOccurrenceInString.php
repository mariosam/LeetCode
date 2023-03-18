<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class FindTheIndexOfTheFirstOccurrenceInString {    

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        $pos = strpos($haystack, $needle);

        return $pos === false ? -1 : $pos;
    }

}
