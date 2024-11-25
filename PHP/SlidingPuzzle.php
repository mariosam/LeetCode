<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class SlidingPuzzle {    

    /**
     * @param Integer[][] $board
     * @return Integer
     */
    function slidingPuzzle($board) {
        $m = [];
        $b = "";
        $q = [];
        $moves = [[1, 0], [-1, 0], [0, 1], [0, -1]];
        $target = "123450";

        foreach ($board as $row) {
            foreach ($row as $val) {
                $b .= $val;
            }
        }

        if ($b === $target) {
            return 0;
        }

        $m[$b] = true;
        array_push($q, $b);
        $t = 1;

        while (!empty($q)) {
            for ($i = count($q); $i > 0; $i--) {
                $s = array_shift($q);
                $idx = strpos($s, "0");
                $x = intdiv($idx, 3);
                $y = $idx % 3;

                foreach ($moves as $move) {
                    $nx = $x + $move[0];
                    $ny = $y + $move[1];
                    if ($nx < 0 || $nx >= 2 || $ny < 0 || $ny >= 3) {
                        continue;
                    }

                    $tmp = str_split($s);
                    $newIdx = $nx * 3 + $ny;
                    $temp = $tmp[$idx];
                    $tmp[$idx] = $tmp[$newIdx];
                    $tmp[$newIdx] = $temp;

                    $newS = implode("", $tmp);
                    if ($newS === $target) {
                        return $t;
                    }

                    if (!isset($m[$newS])) {
                        $m[$newS] = true;
                        array_push($q, $newS);
                    }
                }
            }
            $t++;
        }
        return -1;
    }

}
