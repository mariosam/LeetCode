<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class BitwiseORsOfSubarrays {    

    /**
     * @param Integer[] $arr
     * @return Integer
     */
    function subarrayBitwiseORs($arr) {
        $cur = array_fill(0, 33, 0);
        $next = array_fill(0, 33, 0);
        $n1 = 0;
        $set = [];

        foreach ($arr as $a) {
            $n2 = 0;
            $next[$n2++] = $a;
            $set[$a] = true;
            for ($i = 0; $i < $n1; $i++) {
                $a2 = $a | $cur[$i];
                if ($a2 != $a) {
                    $a = $a2;
                    $next[$n2++] = $a;
                    $set[$a] = true;
                }
            }
            $temp = $cur;
            $cur = $next;
            $next = $temp;
            $n1 = $n2;
        }

        return count($set);
    }

}
