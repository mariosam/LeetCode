<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class CheckEveryRowColumnContainsNumbers {    

    /**
     * @param Integer[][] $matrix
     * @return Boolean
     */
    function checkValid($matrix) {
        $arTemp = [];

        //se possui apenas 1 elemento no array
        if ( count($matrix) == 1 ) return true;

        //percorre as linhas
        for ( $i=0; $i < count($matrix); $i++ ) {
            for ( $j=0; $j < count($matrix[$i]); $j++ ) {
                //se tem algum numero repetido na linha
                if ( in_array( $matrix[$i][$j], $arTemp ) ) return false;
                //guarda o valor temporariamente
                array_push( $arTemp, $matrix[$i][$j] );
            }
            $arTemp = [];
        }

        //percorre as colunas
        for ( $i=0; $i < count($matrix); $i++ ) {
            for ( $j=0; $j < count($matrix); $j++ ) {
                //se tem algum numero repetido na coluna
                if ( in_array( $matrix[$j][$i], $arTemp ) ) return false;
                //guarda o valor temporariamente
                array_push( $arTemp, $matrix[$j][$i] );
            }
            $arTemp = [];
        }
        
        return true;
    }

}
