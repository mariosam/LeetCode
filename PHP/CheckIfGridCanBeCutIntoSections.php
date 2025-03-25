<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CheckIfGridCanBeCutIntoSections {    

    /**
     * @param Integer $n
     * @param Integer[][] $rectangles
     * @return Boolean
     */
    function checkValidCuts($n, $rectangles) {
        usort($rectangles, function($a, $b) {
            return $a[0] <=> $b[0];
        });

        $max = $rectangles[0][2];
        $cnt = 0;

        for ($i = 1; $i < count($rectangles); $i++) {
            if ($rectangles[$i][0] >= $max) {
                $cnt++;
            }
            $max = max($max, $rectangles[$i][2]);
        }

        if ($cnt >= 2) {
            return true;
        }

        usort($rectangles, function($a, $b) {
            return $a[1] <=> $b[1];
        });

        $max = $rectangles[0][3];
        $cnt = 0;

        for ($i = 1; $i < count($rectangles); $i++) {
            if ($rectangles[$i][1] >= $max) {
                $cnt++;
            }
            $max = max($max, $rectangles[$i][3]);
        }

        return $cnt >= 2;
    }

}
