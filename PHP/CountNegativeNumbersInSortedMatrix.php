<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CountNegativeNumbersInSortedMatrix {    

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function countNegatives($grid) {
        $neg = 0;
  
        for ( $i=0; $i < count($grid); $i++ ) {
            for ( $j=0; $j < count($grid[$i]); $j++ ) {
                if ( $grid[$i][$j] < 0 ) {
                    $neg += count($grid[$i]) - $j;
                    break;
                }
            }
        }
        
        return $neg;
    }
}
