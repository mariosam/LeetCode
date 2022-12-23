<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class LongestCommonPrefix {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        $result = "";

        //toma a menor string como base
        sort( $strs );

        //percorre a menor string ate o final
        for ( $j=1; $j <= strlen($strs[0]); $j++ ) {
            $temp = substr( $strs[0], 0, $j );

            //percorre o array
            for ( $i=1; $i < count($strs); $i++ ) {
                //compara a menor string com as opcoes do array
                if ( $temp != substr( $strs[$i], 0, $j ) ) break 2;
            }

            $result = $temp;
        }

        return $result;
    }

}
