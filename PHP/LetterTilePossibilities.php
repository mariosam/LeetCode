<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class LetterTilePossibilities {    

    /**
     * @param String $tiles
     * @return Integer
     */
    function numTilePossibilities($tiles) {
        $record = array_fill(0, 26, 0);
        for ($i = 0; $i < strlen($tiles); $i++) {
            $record[ord($tiles[$i]) - ord('A')]++;
        }
        return $this->dfs($record);
    }

    function dfs(&$arr) {
        $sum = 0;
        for ($i = 0; $i < 26; $i++) {
            if ($arr[$i] == 0) continue;
            $sum++;
            $arr[$i]--;
            $sum += $this->dfs($arr);
            $arr[$i]++;
        }
        return $sum;
    }

}
