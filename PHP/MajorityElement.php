<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class MajorityElement {    

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $n = 0;
        $sum = 1;
        $contando = 0;
        //coloca em ordem crescente para fazer contagem
        sort( $nums ); 

        //percorre o array contando os Ns
        for ( $i=1; $i < count( $nums ); $i++ ) {
            //se houve troca de N
            if ( $nums[$i] != $nums[$i-1] ) {
                //e a contagem atual for maior que a contagem anterior
                if ( $sum > $contando ) {
                    $n = $nums[$i-1];
                    $contando = $sum;
                }
                //reinicia contagem do novo N
                $sum = 1;
            } else {
                //somando os N
                $sum++;
            }
        }
        
        //verifica se o ultimo N eh o maior
        if ( $sum > $contando ) $n = $nums[count( $nums )-1];

        return $n;
    }

}
