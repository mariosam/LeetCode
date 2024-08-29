<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CountSubIslands {    

    /**
     * @param Integer[][] $grid1
     * @param Integer[][] $grid2
     * @return Integer
     */
    function countSubIslands($grid1, $grid2) {
        $ans = 0;

        for ($i = 0; $i < count($grid2); ++$i) {
            for ($j = 0; $j < count($grid2[0]); ++$j) {
                if ($grid2[$i][$j] == 1) {
                    $ans += $this->dfs($grid1, $grid2, $i, $j);
                }
            }
        }

        return $ans;
    }

    private function dfs($grid1, &$grid2, $i, $j) {
        if ($i < 0 || $i == count($grid1) || $j < 0 || $j == count($grid2[0])) {
            return 1;
        }
        if ($grid2[$i][$j] != 1) {
            return 1;
        }

        $grid2[$i][$j] = 2; // Marcar como visitado

        return $this->dfs($grid1, $grid2, $i + 1, $j) &
               $this->dfs($grid1, $grid2, $i - 1, $j) &
               $this->dfs($grid1, $grid2, $i, $j + 1) &
               $this->dfs($grid1, $grid2, $i, $j - 1) &
               $grid1[$i][$j];
    }

}
