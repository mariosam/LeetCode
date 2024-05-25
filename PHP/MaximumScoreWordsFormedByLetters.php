<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MaximumScoreWordsFormedByLetters {    

    /**
     * @param String[] $words
     * @param String[] $letters
     * @param Integer[] $score
     * @return Integer
     */
    function maxScoreWords($words, $letters, $score) {
        $cnt = array_fill(0, 26, 0);
        foreach ($letters as $letter) {
            $cnt[ord($letter) - ord('a')]++;
        }
        $n = count($words);
        $ans = 0;
        
        for ($i = 0; $i < (1 << $n); ++$i) {
            $cur = array_fill(0, 26, 0);
            for ($j = 0; $j < $n; ++$j) {
                if (($i >> $j & 1) == 1) {
                    for ($k = 0; $k < strlen($words[$j]); ++$k) {
                        $cur[ord($words[$j][$k]) - ord('a')]++;
                    }
                }
            }
            $ok = true;
            $t = 0;
            for ($j = 0; $j < 26; ++$j) {
                if ($cur[$j] > $cnt[$j]) {
                    $ok = false;
                    break;
                }
                $t += $cur[$j] * $score[$j];
            }
            if ($ok && $ans < $t) {
                $ans = $t;
            }
        }
        
        return $ans;
    }
}
