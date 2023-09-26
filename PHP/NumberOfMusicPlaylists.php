<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class NumberOfMusicPlaylists {    

    /**
     * @param Integer $n
     * @param Integer $goal
     * @param Integer $k
     * @return Integer
     */
    function numMusicPlaylists($n, $goal, $k) {
        $mod = 1000000007;
        $f = array_fill(0, $goal + 1, array_fill(0, $n + 1, 0));
        $f[0][0] = 1;

        for ($i = 1; $i <= $goal; $i++) {
            for ($j = 1; $j <= $n; $j++) {
                $f[$i][$j] = ($f[$i - 1][$j - 1] * ($n - $j + 1)) % $mod;
                if ($j > $k) {
                    $f[$i][$j] = ($f[$i][$j] + ($f[$i - 1][$j] * ($j - $k)) % $mod) % $mod;
                }
            }
        }

        return $f[$goal][$n];
    }

}
