<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class SeparateSquaresI {    

    /**
     * @param Integer[][] $squares
     * @return Float
     */
    function separateSquares($squares) {
        $halfArea = 0.0;
        foreach ($squares as $sq) {
            $halfArea += $sq[2] * $sq[2];
        }
        $halfArea /= 2.0;

        $events = [];
        foreach ($squares as $sq) {
            [$x, $y, $l] = $sq;
            $events[] = [$y, 1, $l];
            $events[] = [$y + $l, 0, $l];
        }

        usort($events, fn($a, $b) => $a[0] <=> $b[0]);

        $area = 0.0;
        $width = 0;
        $prevY = 0;

        foreach ($events as $e) {
            [$y, $type, $l] = $e;
            $gain = $width * ($y - $prevY);
            if ($area + $gain >= $halfArea) {
                return $prevY + ($halfArea - $area) / $width;
            }
            $area += $gain;
            $width += ($type === 1) ? $l : -$l;
            $prevY = $y;
        }

        throw new Exception("Invalid input");
    }

}
