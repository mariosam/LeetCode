<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class FindTheKthCharacterInStringGameI {    

    /**
     * @param Integer $k
     * @return String
     */
    function kthCharacter($k) {
        $count = substr_count(decbin($k - 1), '1');
        return chr(ord('a') + $count);
    }

}
