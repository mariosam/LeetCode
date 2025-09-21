<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MinimumNumberOfPeopleToTeach {    

    /**
     * @param Integer $n
     * @param Integer[][] $languages
     * @param Integer[][] $friendships
     * @return Integer
     */
    function minimumTeachings($n, $languages, $friendships) {
        $langMap = [];
        for ($i = 0; $i < count($languages); $i++) {
            $langMap[$i + 1] = array_flip($languages[$i]); // use as set
        }

        $canCommunicate = array_fill(0, count($friendships), false);
        for ($i = 1; $i <= $n; $i++) {
            for ($j = 0; $j < count($friendships); $j++) {
                [$f1, $f2] = $friendships[$j];
                if (isset($langMap[$f1][$i]) && isset($langMap[$f2][$i])) {
                    $canCommunicate[$j] = true;
                }
            }
        }

        $minTeach = count($friendships);
        for ($i = 1; $i <= $n; $i++) {
            $teach = [];
            for ($j = 0; $j < count($friendships); $j++) {
                if (!$canCommunicate[$j]) {
                    [$f1, $f2] = $friendships[$j];
                    if (!isset($langMap[$f1][$i])) $teach[$f1] = true;
                    if (!isset($langMap[$f2][$i])) $teach[$f2] = true;
                }
            }
            $minTeach = min($minTeach, count($teach));
        }

        return $minTeach;
    }
}
