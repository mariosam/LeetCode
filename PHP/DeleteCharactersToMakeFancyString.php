<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class DeleteCharactersToMakeFancyString {    

    /**
     * @param String $s
     * @return String
     */
    function makeFancyString($s) {
        $ans = [];

        for ($i = 0, $n = strlen($s); $i < $n; $i++) {
            $c = $s[$i];
            $len = count($ans);
            if ($len < 2 || $c !== $ans[$len - 1] || $c !== $ans[$len - 2]) {
                $ans[] = $c;
            }
        }

        return implode('', $ans);
    }

}
