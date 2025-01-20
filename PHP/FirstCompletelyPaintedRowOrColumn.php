<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class FirstCompletelyPaintedRowOrColumn {    

    /**
     * @param Integer[] $arr
     * @param Integer[][] $mat
     * @return Integer
     */
    function firstCompleteIndex($arr, $mat) {
        $m = count($mat);
        $n = count($mat[0]);
        $idx = [];

        foreach ($mat as $i => $row) {
            foreach ($row as $j => $val) {
                $idx[$val] = [$i, $j];
            }
        }

        $row = array_fill(0, $m, 0);
        $col = array_fill(0, $n, 0);

        foreach ($arr as $k => $num) {
            list($i, $j) = $idx[$num];
            $row[$i]++;
            $col[$j]++;
            if ($row[$i] == $n || $col[$j] == $m) {
                return $k;
            }
        }
    }

}
