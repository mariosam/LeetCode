<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class AsteroidCollision {    

    /**
     * @param Integer[] $asteroids
     * @return Integer[]
     */
    function asteroidCollision($asteroids) {
        $ans = [];

        foreach ($asteroids as $asteroid) {
            array_push($ans, $asteroid);

            $j = count($ans) - 1;
            while ($j >= 1) {
                if ($ans[$j] === 0) {
                    array_splice($ans, $j, 1);
                    break;
                }

                if ($ans[$j - 1] < 0 || $ans[$j] > 0) {
                    break;
                }

                if ($ans[$j - 1] === -$ans[$j]) {
                    array_splice($ans, $j - 1, 2);
                    $j--;
                } elseif ($ans[$j - 1] > -$ans[$j]) {
                    array_splice($ans, $j, 1);
                    break;
                } else {
                    $ans[$j - 1] = $ans[$j];
                    array_splice($ans, $j, 1);
                }

                $j--;
            }
        }

        return $ans;
    }
}
