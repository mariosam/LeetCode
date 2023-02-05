<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class FirstMissingPositive {    

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function firstMissingPositive($nums) {
        //se tem apenas 1 elemento no array
        if ( count($nums)==1 ) return $nums[0] != 1 ? 1 : 2;

        //coloca em ordem ASC e remove os duplicados
        sort( $nums );
        $nums = array_unique( $nums );

        //percorre o array em blocos para nao dar timeout
        for ( $i=0; $i < count($nums); $i=$i+100 ) {
            $arTemp = array_slice( $nums, $i, 100 );

            $result = $this->checkBlockMissing( $arTemp, $i );
            if ( $result > 0 ) return $result;
        }

        return max( $nums )+1;
    }

    function checkBlockMissing($ar = [], $ini = 0) : int {
        //se o ultimo numero da sequencia for igual o inicial+100, entao nao existem numeros faltando: nem analisa
        if ( count($ar)==100 && max( $ar ) == (99+min($ar)) ) return 0;

        //percorre o bloco verificando se o numero esta faltando
        for ( $i=0; $i < count($ar); $i++ ) {
            $num = $ini+$i+1;
            if ( $num > 0 && ! in_array( $num, $ar ) ) return $num;
        }

        return max( $ar )+1;
    }
}
