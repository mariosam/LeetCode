<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class WordSearch {    

    /**
     * @param String[][] $board
     * @param String $word
     * @return Boolean
     */
    function exist($board, $word) {
        if (strlen($word) === 0) {
            return false;
        }
        $b = str_split($word);
        for ($x = 0; $x < count($board); $x++) {
            for ($y = 0; $y < count($board[$x]); $y++) {
                if ($this->dfs($x, $y, $board, $b)) {
                    return true;
                }
            }
        }
        return false;
    }

    private function dfs($x, $y, &$board, $word) {
        if ($x < 0 || $x >= count($board)) {
            return false;
        }
        if ($y < 0 || $y >= count($board[$x])) {
            return false;
        }
        if ($board[$x][$y] !== $word[0]) {
            return false;
        }
        if (count($word) === 1) {
            return true;
        }
        $tmp = $board[$x][$y];
        $board[$x][$y] = '-';
        $found = $this->dfs($x + 1, $y, $board, array_slice($word, 1)) ||
                 $this->dfs($x - 1, $y, $board, array_slice($word, 1)) ||
                 $this->dfs($x, $y + 1, $board, array_slice($word, 1)) ||
                 $this->dfs($x, $y - 1, $board, array_slice($word, 1));
        $board[$x][$y] = $tmp;
        return $found;
    }

}
