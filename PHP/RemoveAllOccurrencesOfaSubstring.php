<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class RemoveAllOccurrencesOfaSubstring {    

    /**
     * @param String $s
     * @param String $part
     * @return String
     */
    function removeOccurrences($s, $part) {
        while (($idx = strpos($s, $part)) !== false) {
            $s = substr($s, 0, $idx) . substr($s, $idx + strlen($part));
        }
        return $s;
    }

}
