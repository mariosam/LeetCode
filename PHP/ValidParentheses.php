<?php
/**
 * @version PHP
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class ValidParentheses {

    /**
     * Check if the order of opened/closed parentheses is valid.
     */
    public function isValid($s) {
        $stck = array();

        for ( $i=0; $i < strlen($s); $i++ ) {
            $pos = "";
            if ( count($stck) > 0 ) $pos = $stck[count($stck)-1];

            if ( $s[$i] == "(" || $s[$i] == "{" || $s[$i] == "[" ) {
                array_push($stck, $s[$i]);
            } else if ( ($pos == "(" && $s[$i] == ")") || ($pos == "{" && $s[$i] == "}") || ($pos == "[" && $s[$i] == "]") ) {
                array_pop($stck);
            } else {
                return false;
            }
        }

        return count($stck) > 0 ? false : true;
    }
}
