<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

define("ROMAN", ["I"=>1, "V"=>5, "X"=>10, "L"=>50, "C"=>100, "D"=>500, "M"=>1000]);

class RomanToInteger {    

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $soma = 0;

        for ( $i=0; $i < strlen($s); $i++ ) {
            if ( $i+1 < strlen($s) && ROMAN[ $s[$i] ] < ROMAN[ $s[$i+1] ]  ) {
                $soma = $soma + (ROMAN[ $s[$i+1] ] - ROMAN[ $s[$i] ]);

                $i++;
            } else {
                $soma += ROMAN[ $s[$i] ];
            }
        }
        
        return $soma;
    }

}
