<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class SortAnArray {    

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortArray($nums) {
        if ( count($nums) < 2 ) return $nums;
    
        $lesser = 0;
        $greater = count($nums)-1;
        $pivot = rand.Intn(count($nums));

        $nums[$pivot] = $nums[$greater];
        $nums[$greater] = $nums[$pivot];

        for ( $i=0; $i < count($nums); $i++ ) {
            if ( $nums[$i] < $nums[$greater] ) {
                $nums[$lesser] = $nums[$i];
                $nums[$i] = $nums[$lesser];
                $lesser++;
            }
        }
    
        $nums[$lesser] = $nums[$greater];
        $nums[$greater] = $nums[$lesser];

        sortArray($nums[$lesser]);
        sortArray($nums[$lesser+1]);
    
        return $nums;
    }
}
