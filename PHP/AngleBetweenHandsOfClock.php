<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class AngleBetweenHandsOfClock {    

    /**
     * @param Integer $hour
     * @param Integer $minutes
     * @return Float
     */
    function angleClock($hour, $minutes) {
        $minAngle = $minutes * 360 / 60;
        $hourAnglePart1 = $hour != 12 ? ($hour * 360) / 12 : 0;
        $hourAnglePart2 = (30 * $minutes) / 60.0;
        $hourAngle = $hourAnglePart1 + $hourAnglePart2;
        $preResult = abs($minAngle - $hourAngle);

        return $preResult > 180 ? 360 - $preResult : $preResult;
    }
}
