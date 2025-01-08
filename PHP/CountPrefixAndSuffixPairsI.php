<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CountPrefixAndSuffixPairsI {    

    /**
     * @param String[] $words
     * @return Integer
     */
    function countPrefixSuffixPairs($words) {
        $count = 0;
        $n = count($words);
        for ($i = 0; $i < $n - 1; $i++) {
            for ($j = $i + 1; $j < $n; $j++) {
                if (str_starts_with($words[$j], $words[$i]) && str_ends_with($words[$j], $words[$i])) {
                    $count++;
                }
            }
        }
        return $count;
    }
}
