<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class FurthestPointFromOrigin {    

    /**
     * @param String $moves
     * @return Integer
     */
    function furthestDistanceFromOrigin($moves) {
        $movesMap = [];

        for ($i = 0; $i < strlen($moves); $i++) {
            $move = $moves[$i];

            if (!isset($movesMap[$move])) {
                $movesMap[$move] = 0;
            }
            $movesMap[$move]++;
        }

        $r = $movesMap['R'] ?? 0;
        $l = $movesMap['L'] ?? 0;
        $u = $movesMap['_'] ?? 0;

        if ($r > $l) {
            return $u + $r - $l;
        } else {
            return $u + $l - $r;
        }
    }

}
