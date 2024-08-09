<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MagicSquaresInGrid {    

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function numMagicSquaresInside($grid) {
        if ($grid == null || count($grid) < 3 || count($grid[0]) < 3) 
        return 0;
        $R = count($grid);
        $C = count($grid[0]);
        $count = 0;
        for ($r = 0; $r <= $R - 3; ++$r) {
            for ($c = 0; $c <= $C - 3; ++$c) {
                if ($grid[$r + 1][$c + 1] == 5 && $this->isMagic($grid, $r, $c)) {
                    $count++;
                }
            }
        }
        return $count;
    }

    function isMagic($grid, $r, $c) {
        $counts = array_fill(0, 9, 0);
        for ($i = 0; $i < 3; ++$i) {
            $rSum = 0;
            $cSum = 0;
            for ($j = 0; $j < 3; ++$j) {
                $rSum += $grid[$r + $i][$c + $j];
                $cSum += $grid[$r + $j][$c + $i];
                $t = $grid[$r + $i][$c + $j];
                if ($t > 9 || $t < 1 || ++$counts[$t - 1] > 1) {
                    return false;
                }
            }
            if ($rSum != 15 || $cSum != 15) {
                return false;
            }
        }
        return true;
    }

}
