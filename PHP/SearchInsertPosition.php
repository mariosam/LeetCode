<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class SearchInsertPosition {    

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        //verifica se o numero ja existe no array
        $key = array_search( $target, $nums );

        //se nao encontrou a chave
        if ( $key === false ) {
            //verifica se o numero se encaixa dentro do array
            for ( $i=0; $i < count($nums); $i++ ) {
                if ( $nums[$i] > $target ) return $i;
            }
            //se o numero for maior que o ultimo elemento do array
            return count($nums);
        }

        return $key;
    }

}
