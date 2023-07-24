<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class FindSmallestLetterGreaterThanTarget {    

    /**
     * @param String[] $letters
     * @param String $target
     * @return String
     */
    function nextGreatestLetter($letters, $target) {
        $left = 0;
        $right = count($letters) - 1;
        
        if ($target >= $letters[count($letters) - 1]) return $letters[0];
        while ($left <= $right) {
            $mid = floor(($left + $right) / 2);

            if ($letters[$mid] > $target) {
                $right = $mid - 1;
            } else {
                $left = $mid + 1;
            }
        }

        return $letters[$left];
    }

}
