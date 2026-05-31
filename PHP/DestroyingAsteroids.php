<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class DestroyingAsteroids {    

    /**
     * @param Integer $mass
     * @param Integer[] $asteroids
     * @return Boolean
     */
    function asteroidsDestroyed($mass, $asteroids) {
        $total = (int)$mass;
        sort($asteroids);

        foreach ($asteroids as $asteroid) {
            if ($asteroid > $total) {
                return false;
            }
            $total += $asteroid;
        }
        return true;
    }

}
