<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class LengthOfLastWord {    

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        //remove os espacos em branco
        $s = trim($s);
        //inicializa retorno
        $result = 0;

        //percorre a frase de tras pra frente
        for ( $i = strlen($s)-1; $i > -1; $i-- ) {
            //quando encontrar um espaco em branco interrompe
            if ( $s[$i] == " " ) break;
            $result++;
        }

        return $result;
    }

}
