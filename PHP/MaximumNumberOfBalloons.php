<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MaximumNumberOfBalloons {    

    /**
     * @param String $text
     * @return Integer
     */
    function maxNumberOfBalloons($text) {
        $map = [];
        $set = [];

        foreach (str_split($text) as $ch) {
            $map[$ch] = ($map[$ch] ?? 0) + 1;
        }
        $min = strlen($text);

        foreach ($map as $ch => $count) {
            if ($ch == 'b' || $ch == 'a' || $ch == 'n') {
                $min = min($min, $count);
                $set[$ch] = true;
            }

            if ($ch == 'o' || $ch == 'l') {
                $min = min($min, intdiv($count, 2));
                $set[$ch] = true;
            }
        }
        return count($set) == 5 ? $min : 0;
    }
}
