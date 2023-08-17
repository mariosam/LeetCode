<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class KnightProbabilityInChessboard {    

    /**
     * @param Integer $n
     * @param Integer $k
     * @param Integer $row
     * @param Integer $column
     * @return Float
     */
    function knightProbability($n, $k, $row, $column) {
        $dirs = [[-1, 2], [-1, -2], [1, -2], [1, 2], [-2, 1], [-2, -1], [2, 1], [2, -1]];
        $dp = array_fill(0, $n, array_fill(0, $n, array_fill(0, $k + 1, 0)));

        for ($i = 0; $i < $n; $i++) {
          for ($j = 0; $j < $n; $j++) {
            $dp[$i][$j][0] = 1;
          }
        }

        for ($p = 1; $p <= $k; $p++) {
          for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n; $j++) {
              foreach ($dirs as $dir) {
                $nx = $i + $dir[0];
                $ny = $j + $dir[1];

                if ($nx < 0 || $nx >= $n || $ny < 0 || $ny >= $n) {
                  continue;
                }

                $dp[$i][$j][$p] += $dp[$nx][$ny][$p - 1] / 8;
              }
            }
          }
        }

        return $dp[$row][$column][$k];
    }
}
