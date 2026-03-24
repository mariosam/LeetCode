<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class ConstructProductMatrix {    

    /**
     * @param Integer[][] $grid
     * @return Integer[][]
     */
    function constructProductMatrix($grid) {
        $MOD = 12345;
        $m = count($grid);
        $n = count($grid[0]);

        $ans = array_fill(0, $m, array_fill(0, $n, 0));

        $prefix = [1];
        $suffix = 1;

        // prefix
        foreach ($grid as $row) {
            foreach ($row as $num) {
                $last = $prefix[count($prefix) - 1];
                $prefix[] = ($last * $num) % $MOD;
            }
        }

        // suffix + answer
        for ($i = $m - 1; $i >= 0; $i--) {
            for ($j = $n - 1; $j >= 0; $j--) {
                $idx = $i * $n + $j;
                $ans[$i][$j] = ($prefix[$idx] * $suffix) % $MOD;
                $suffix = ($suffix * $grid[$i][$j]) % $MOD;
            }
        }

        return $ans;
    }
}
