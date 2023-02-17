<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class AddToArrayFormOfInteger {    

    /**
     * @param Integer[] $num
     * @param Integer $k
     * @return Integer[]
     */
    function addToArrayForm($num, $k) {
        $numbers = implode($num);

        // Before proceeding further, make sure length of k is larger.
        if ( strlen($numbers) > strlen($k) ) {
            $t = $numbers;
            $numbers = $k;
            $k = $t;
        }
    
        // Take an empty string for storing result
        $result = "";
    
        // Calculate length of both string
        $n1 = strlen($numbers);
        $n2 = strlen($k);
    
        // Reverse both of strings
        $numbers = strrev($numbers);
        $k = strrev($k);
    
        $carry = 0;
        for ( $i=0; $i < $n1; $i++ ) {
            // Do school mathematics, compute sum of current digits and carry
            $sum = ((ord($numbers[$i])-48)+((ord($k[$i])-48)+$carry));
            $result .= chr($sum%10 + 48);
    
            // Calculate carry for next step
            $carry = (int) ($sum/10);
        }
    
        // Add remaining digits of larger number
        for ( $i = $n1; $i < $n2; $i++ ) {
            $sum = ((ord($k[$i])-48)+$carry);
            $result .= chr($sum%10 + 48);
            $carry = (int) ($sum/10);
        }
    
        // Add remaining carry
        if ($carry) $result .= chr($carry+48);
    
        // reverse resultant string
        $result = strrev($result);
        return str_split($result);
    }
}
