<?php
/**
 * @version PHP 8.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class SpecialPositionsInBinaryMatrix {    

    /**
     * @param Integer[][] $mat
     * @return Integer
     */
    function numSpecial($mat) {
        $m = count($mat);
        $n = count($mat[0]);
        $ans = 0;

        $rowOnes = array_fill(0, $m, 0);
        $colOnes = array_fill(0, $n, 0);

        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $n; $j++) {
                if ($mat[$i][$j] == 1) {
                    $rowOnes[$i]++;
                    $colOnes[$j]++;
                }
            }
        }

        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $n; $j++) {
                if ($mat[$i][$j] == 1 && $rowOnes[$i] == 1 && $colOnes[$j] == 1) {
                    $ans++;
                }
            }
        }

        return $ans;
    }

}
