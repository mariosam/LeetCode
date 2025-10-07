<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class ContainerWithMostWater {    

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        $max = 0;
        $i = 0;
        $j = count($height) - 1;

        while ($i < $j) {
            $width = $j - $i;
            $area = $width * min($height[$i], $height[$j]);
            $max = max($max, $area);

            if ($height[$i] < $height[$j]) {
                $i++;
            } else {
                $j--;
            }
        }

        return $max;
    }

}
