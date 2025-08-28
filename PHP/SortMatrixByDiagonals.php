<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class SortMatrixByDiagonals {    

    /**
     * @param Integer[][] $grid
     * @return Integer[][]
     */
    function sortMatrix($grid) {
        $n = count($grid);

        // Bottom-left diagonals
        for ($k = $n - 2; $k >= 0; --$k) {
            $i = $k;
            $j = 0;
            $t = [];
            while ($i < $n && $j < $n) {
                $t[] = $grid[$i][$j];
                $i++; $j++;
            }
            sort($t);
            foreach ($t as $x) {
                $i--; $j--;
                $grid[$i][$j] = $x;
            }
        }

        // Top-right diagonals
        for ($k = $n - 2; $k > 0; --$k) {
            $i = $k;
            $j = $n - 1;
            $t = [];
            while ($i >= 0 && $j >= 0) {
                $t[] = $grid[$i][$j];
                $i--; $j--;
            }
            sort($t);
            foreach ($t as $x) {
                $i++; $j++;
                $grid[$i][$j] = $x;
            }
        }

        return $grid;
    }
}
