<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class LongestSubstring {    

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $result = 0;
        $ciclos = 0;
        $arr = array();

        for ( $i = 0; $i < strlen($s); $i++ ) {
            //verifica se esse char ja existe no substring analisado.
            if ( in_array( $s[$i], $arr ) ) {
                //reinicia o array com nova sequencia de substring.
                $arr = array();
                
                //reiniciar o looping pelo primeiro char da sequencia.
                if ( strlen($s) > $ciclos ) {
                    $i = $ciclos;
                    $ciclos++;
                }
            }
            //junta na substring do array.
            $arr[$i] = $s[$i];

            //verifica maior contagem.
            if ( count($arr) > $result ) $result = count($arr);
        }

        return $result;
    }

}
