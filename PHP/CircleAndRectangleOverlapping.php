<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CircleAndRectangleOverlapping {    

    /**
     * @param Integer $radius
     * @param Integer $xCenter
     * @param Integer $yCenter
     * @param Integer $x1
     * @param Integer $y1
     * @param Integer $x2
     * @param Integer $y2
     * @return Boolean
     */
    function checkOverlap($radius, $xCenter, $yCenter, $x1, $y1, $x2, $y2) {
        $res = 0;

        if ($xCenter < $x1 || $xCenter > $x2) {
            $res += min(
                pow($x1 - $xCenter, 2),
                pow($xCenter - $x2, 2)
            );
        }

        if ($yCenter < $y1 || $yCenter > $y2) {
            $res += min(
                pow($y1 - $yCenter, 2),
                pow($yCenter - $y2, 2)
            );
        }
        return $res <= $radius * $radius;
    }

}
