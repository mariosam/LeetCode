<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CountServersThatCommunicate {    

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function countServers($grid) {
        $m = count($grid);
        $n = count($grid[0]);
        $row = array_fill(0, $m, 0);
        $col = array_fill(0, $n, 0);
        $res = 0;

        // Count servers in each row and column
        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $n; $j++) {
                if ($grid[$i][$j] == 1) {
                    $row[$i]++;
                    $col[$j]++;
                }
            }
        }

        // Count servers that can communicate
        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $n; $j++) {
                if ($grid[$i][$j] == 1 && ($row[$i] + $col[$j] > 2)) {
                    $res++;
                }
            }
        }

        return $res;
    }
}
