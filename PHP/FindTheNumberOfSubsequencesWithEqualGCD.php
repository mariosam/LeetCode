<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class FindTheNumberOfSubsequencesWithEqualGCD {    

    private const MOD = 1000000007;

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function subsequencePairCount($nums) {
        $maxNum = max($nums);
        $n = count($nums);
        $mem = array_fill(0, $n, null);
        return $this->dfs($nums, 0, 0, 0, $mem);
    }

    private function dfs($nums, $i, $x, $y, &$mem) {
        if ($i == count($nums)) {
            return ($x > 0 && $x == $y) ? 1 : 0;
        }

        if (isset($mem[$i][$x][$y])) {
            return $mem[$i][$x][$y];
        }

        $skip = $this->dfs($nums, $i + 1, $x, $y, $mem);
        $take1 = $this->dfs($nums, $i + 1, $this->gcd($x, $nums[$i]), $y, $mem);
        $take2 = $this->dfs($nums, $i + 1, $x, $this->gcd($y, $nums[$i]), $mem);
        $mem[$i][$x][$y] = (($skip + $take1 + $take2) % self::MOD);
        return $mem[$i][$x][$y];
    }

    private function gcd($a, $b) {
        while ($b != 0) {
            $t = $a % $b;
            $a = $b;
            $b = $t;
        }
        return $a;
    }

}
