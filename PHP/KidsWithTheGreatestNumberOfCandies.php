<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class KidsWithTheGreatestNumberOfCandies {    

    /**
     * @param Integer[] $candies
     * @param Integer $extraCandies
     * @return Boolean[]
     */
    function kidsWithCandies($candies, $extraCandies) {
        $maximum = 0;
        $output = [];

        foreach ($candies as $candy) {
            $check = ($candy > $maximum) && ($maximum = $candy);
        }

        for ($i = 0; $i < count($candies); $i++) {
            array_push($output, $candies[$i] + $extraCandies >= $maximum);
        }

        return $output;
    }

}
