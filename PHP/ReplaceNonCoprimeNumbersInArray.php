<?php
/**
 * @version PHP 8.2.20
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class ReplaceNonCoprimeNumbersInArray {    

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function replaceNonCoprimes($nums) {
        $res = [];
        foreach ($nums as $x) {
            $res[] = $x;
            while (count($res) > 1) {
                $t1 = $res[count($res) - 1];
                $t2 = $res[count($res) - 2];
                $g = $this->gcd($t1, $t2);
                if ($g <= 1) break;
                array_pop($res);
                $res[count($res) - 1] = $t1 * intdiv($t2, $g);
            }
        }
        return $res;
    }

    function gcd(int $a, int $b): int {
        while ($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }
        return $a;
    }

}
