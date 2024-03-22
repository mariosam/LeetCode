<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CustomSortString {

    /**
     * @param String $order
     * @param String $s
     * @return String
     */
    function customSortString($order, $s) {
        $d = [];
        for ($i = 0; $i < strlen($order); $i++) {
            $d[$order[$i]] = $i;
        }
        $cs = str_split($s);
        usort($cs, function($a, $b) use ($d) {
            return $d[$a] - $d[$b];
        });
        return implode('', $cs);
    }

}
