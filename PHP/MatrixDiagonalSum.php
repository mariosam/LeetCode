<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MatrixDiagonalSum {    

    /**
     * @param Integer[][] $mat
     * @return Integer
     */
    function diagonalSum($mat) {
        //se possui apenas 1 elemento no array
        if ( count($mat) == 1 ) return $mat[0][0];
        
        $sum = 0;
        //percorre diagonal: iniciando top left to low right
        for ( $i=0; $i < count($mat); $i++ ) {
            $sum = $sum + $mat[$i][$i];
        }

        //percorre diagonal: iniciando low left to top right
        for ( $i=count($mat)-1, $j=0; $i >= 0; $i--, $j++ ) {
            if ( $i != $j ) $sum = $sum + $mat[$i][$j];
        }
        
        return $sum;
    }

}
