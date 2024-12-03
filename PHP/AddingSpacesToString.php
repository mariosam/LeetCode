<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class AddingSpacesToString {    

    /**
     * @param String $s
     * @param Integer[] $spaces
     * @return String
     */
    function addSpaces($s, $spaces) {
        $result = "";
        $j = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            if ($j < count($spaces) && $i == $spaces[$j]) {
                $result .= " ";
                $j++;
            }
            $result .= $s[$i];
        }
        return $result;
    }

}
