<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CherryPickupII {    

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function cherryPickup($grid) {
        $m = count($grid);
        $n = count($grid[0]);
        $f = array_fill(0, $m, array_fill(0, $n, array_fill(0, $n, -1)));
        
        $f[0][0][$n-1] = $grid[0][0] + $grid[0][$n-1];
        
        for ($i = 1; $i < $m; $i++) {
            for ($j1 = 0; $j1 < $n; $j1++) {
                for ($j2 = 0; $j2 < $n; $j2++) {
                    $x = $grid[$i][$j1];
                    
                    if ($j1 != $j2) {
                        $x += $grid[$i][$j2];
                    }
                    
                    for ($y1 = $j1 - 1; $y1 <= $j1 + 1; $y1++) {
                        for ($y2 = $j2 - 1; $y2 <= $j2 + 1; $y2++) {
                            if ($y1 >= 0 && $y1 < $n && $y2 >= 0 && $y2 < $n && $f[$i-1][$y1][$y2] !== -1) {
                                $f[$i][$j1][$j2] = max($f[$i][$j1][$j2], $f[$i-1][$y1][$y2] + $x);
                            }
                        }
                    }
                }
            }
        }
        
        $ans = 0;
        
        for ($j1 = 0; $j1 < $n; $j1++) {
            for ($j2 = 0; $j2 < $n; $j2++) {
                $ans = max($ans, $f[$m-1][$j1][$j2]);
            }
        }
        
        return $ans;
    }

}
