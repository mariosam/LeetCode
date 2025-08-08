<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class FruitIntoBaskets {    

    /**
     * @param Integer[] $fruits
     * @return Integer
     */
    function totalFruit($fruits) {
        $n = count($fruits);
        if ($n == 0) return 0;

        $present = $fruits[0];
        $present_index = 0;
        $index = 1;
        $start = 0;
        $maxLen = 0;

        while ($index < $n && $fruits[$index] == $present) {
            $index++;
        }
        if ($index == $n) return $index - $start;

        $previous = $present;
        $previous_index = $index - 1;
        $present = $fruits[$index];
        $present_index = $index;

        while ($index < $n) {
            if ($fruits[$index] == $previous) {
                $previous = $present;
                $present = $fruits[$index];
                $present_index = $index;
            } elseif ($fruits[$index] != $present) {
                $maxLen = max($maxLen, $index - $start);
                $start = $present_index;
                $previous = $present;
                $present = $fruits[$index];
                $present_index = $index;
            }
            $index++;
        }
        return max($maxLen, $index - $start);
    }

}
