<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

class ReverseSubstringsBetweenEachPairOfParentheses {    

    /**
     * @param String $s
     * @return String
     */
    function reverseParentheses($s) {
        $stk = [];
        $n = strlen($s);
        for ($i = 0; $i < $n; $i++) {
            if ($s[$i] == ')') {
                $t = [];
                while (end($stk) != '(') {
                    $t[] = array_pop($stk);
                }
                array_pop($stk); // remove '('
                $stk = array_merge($stk, $t);
            } else {
                $stk[] = $s[$i];
            }
        }
        return implode('', $stk);
    }

}
