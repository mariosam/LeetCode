<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CountOfMatchesInTournament {    

    /**
     * @param Integer $n
     * @return Integer
     */
    function numberOfMatches($n) {
        $cnt = 0;

        while ($n != 1) {
            $cnt += $n >> 1;
            if ($n & 1 != 0) {
                $n += 1;
            }
            $n = $n >> 1;
        }

        return $cnt;

    }
}
