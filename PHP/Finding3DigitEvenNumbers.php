<?php
/**
 * @version PHP 8.2.20
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class Finding3DigitEvenNumbers {    

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function findEvenNumbers($digits) {
        $records = array_fill(0, 10, 0);
        foreach ($digits as $d) {
            $records[$d]++;
        }

        $results = [];

        $this->dfs(0, 0, $records, $results);
        sort($results);
        return array_values(array_unique($results));
    }

    function dfs($i, $x, &$records, &$results) {
        if ($i === 3) {
            $results[] = $x;
            return;
        }

        for ($d = 0; $d < 10; $d++) {
            if ($records[$d] === 0) continue;
            if (($i === 0 && $d === 0) || ($i === 2 && $d % 2 !== 0)) continue;

            $records[$d]--;
            $this->dfs($i + 1, $x * 10 + $d, $records, $results);
            $records[$d]++;
        }
    }

}
