<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimumNumberOfPushesToTypeWordII {    

    /**
     * @param String $word
     * @return Integer
     */
    function minimumPushes($word) {
        $cnt = array_fill(0, 26, 0);
        $len = strlen($word);

        for ($i = 0; $i < $len; $i++) {
            $cnt[ord($word[$i]) - ord('a')]++;
        }

        sort($cnt);
        $ans = 0;
        for ($i = 0; $i < 26; $i++) {
            $ans += (intdiv($i, 8) + 1) * $cnt[25 - $i];
        }
        return $ans;
    }
}
