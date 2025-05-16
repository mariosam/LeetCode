<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class LongestUnequalAdjacentGroupsSubsequenceII {    

    /**
     * @param String[] $words
     * @param Integer[] $groups
     * @return String[]
     */
    function getWordsInLongestSubsequence($words, $groups) {
        $n = count($words);
        $dp = array_fill(0, $n, 1);
        $arr = array_fill(0, $n, 0);
        $idx = 0;

        for ($i = $n - 1; $i >= 0; $i--) {
            $s = $words[$i];
            for ($j = $i + 1; $j < $n; $j++) {
                if ($groups[$i] === $groups[$j] || strlen($s) !== strlen($words[$j])) continue;

                $t = $words[$j];
                $diff = 0;
                for ($k = 0; $k < strlen($s); $k++) {
                    if ($s[$k] !== $t[$k]) {
                        $diff++;
                        if ($diff > 1) break;
                    }
                }

                if ($diff !== 1) continue;

                $next = $dp[$j] + 1;
                if ($next > $dp[$i]) {
                    $dp[$i] = $next;
                    $arr[$i] = $j;
                }
                if ($next > $dp[$idx]) {
                    $idx = $i;
                }
            }
        }

        $res = [$words[$idx]];
        $i = $idx;
        while ($dp[$i] > 1) {
            $i = $arr[$i];
            $res[] = $words[$i];
        }

        return $res;
    }
}
