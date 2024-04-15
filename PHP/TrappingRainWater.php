<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class TrappingRainWater {    

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function trap($height) {
        $n = count($height);
        $idx = 0;
        $lefth = 0;
        $righth = 0;
        $area = 0;

        for ($i = 0; $i < $n; $i++) {
            $idx = $height[$idx] <= $height[$i] ? $i : $idx;
        }

        for ($i = 0; $i < $idx; $i++) {
            if ($height[$i] < $lefth) {
                $area += $lefth - $height[$i];
            } else {
                $lefth = $height[$i];
            }
        }

        for ($i = $n - 1; $i > $idx; $i--) {
            if ($height[$i] < $righth) {
                $area += $righth - $height[$i];
            } else {
                $righth = $height[$i];
            }
        }

        return $area;
    }

}
