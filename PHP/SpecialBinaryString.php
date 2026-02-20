<?php
/**
 * @version PHP 8.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class SpecialBinaryString {    

    /**
     * @param String $s
     * @return String
     */
    function makeLargestSpecial($s) {
        $cnt = 0;
        $i = 0;
        $v = [];

        for ($j = 0; $j < strlen($s); $j++) {
            $cnt += ($s[$j] == '1') ? 1 : -1;

            if ($cnt == 0) {
                $inner = substr($s, $i + 1, $j - $i - 1);
                $v[] = '1' . $this->makeLargestSpecial($inner) . '0';
                $i = $j + 1;
            }
        }

        usort($v, function($a, $b) {
            return strcmp($b, $a); // ordem decrescente correta
        });

        return implode('', $v);
    }

}
